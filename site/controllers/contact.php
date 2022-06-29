<?php
    return function($kirby, $pages, $page) {
        $alert = null;

        if($kirby->request()->is('POST') && get('submit')) {
            
            // check honeypot
            if(empty(get('website')) === false) {
                go($page->url());
                exit;
            }

            // data from contact form
            $data = [
                'name'  => get('name'),
                'email' => get('email'),
                'text'  => get('text')
            ];

            // requirements for the data
            $rules = [
                'name'  => ['required', 'minLength' => 3],
                'email' => ['required', 'email'],
                'text'  => ['required', 'minLength' => 3, 'maxLength' => 3000],
            ];

            // error messages for the fields
            $messages = [
                'name'  => 'Vul een geldige naam in',
                'email' => 'Vul een geldig e-mailadres in',
                'text'  => 'Uw tekst moet tussen 3 en 3000 tekens bevatten'
            ];

            // some of the data is invalid
            if($invalid = invalid($data, $rules, $messages)) {
                $alert = $invalid;

            // the data is fine, let's send the email
            } else {
                try {

                    // set email function with correct values
                    $kirby->email([
                        'template' => 'email',
                        'from'     => 'fablab@karel.decoene.nxtmediatech.eu',
                        'replyTo'  => $data['email'],
                        'to'       => 'karel.decoene@hotmail.com',
                        'subject'  => esc($data['name']) . ' heeft het Fablab contactformulier ingevuld',
                        'data'     => [
                            'text'   => esc($data['text']),
                            'sender' => esc($data['name'])
                        ]
                    ]);
    
                // when an exception error occured
                } catch (Exception $error) {
                    if(option('debug')):
                        $alert['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
                    else:
                        $alert['error'] = 'The form could not be sent!';
                    endif;
                }

                // no exception occurred, let's send a success message
                if (empty($alert) === true) {
                    $success = 'Uw boodschap is verstuurd! U hoort snel van ons.';
                    $data = [];
                }
            }
        }

        return [
            'alert'   => $alert,
            'data'    => $data ?? false,
            'success' => $success ?? false
        ];
    };
?>