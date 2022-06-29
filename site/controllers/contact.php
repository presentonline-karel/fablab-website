<?php
return function ($kirby, $pages, $page) {
    $alert = null;

    if ($kirby->request()->is('POST') && get('submit')) {

        // check honeypot
        if (empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        // data from contact form
        $data = [
            'name'  => get('name'),
            'email' => get('email'),
            'message'  => get('message')
        ];

        // the data is invalid
        if ($invalid = invalid($data)) {
            $alert = $invalid;

        // the data is fine, let's send the email
        } else {
            try {
                // set email function with correct values
                $kirby->email([
                    'template' => 'email',
                    'from'     => 'contact@fablabkdg.be',
                    'replyTo'  => $data['email'],
                    'to'       => 'fablab@kdg.be',
                    'subject'  => esc($data['name']) . ' heeft het FabLab contactformulier ingevuld',
                    'data'     => [
                        'name'   => esc($data['name']),
                        'email' => esc($data['email']),
                        'message' => esc($data['message'])
                    ]
                ]);

            // when an exception error occured
            } catch (Exception $error) {
                if (option('debug')) :
                    $alert['error'] = 'Het formulier kon niet verzonden worden: <strong>' . $error->getMessage() . '</strong>';
                else :
                    $alert['error'] = 'Het formulier kon niet verzonden worden.';
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