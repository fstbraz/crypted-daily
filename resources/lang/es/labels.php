<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    // 'general' => [
    //     'all'     => 'Todos',
    //     'yes'     => 'Sí',
    //     'no'      => 'No',
    //     'custom'  => 'Personalizado',
    //     'actions' => 'Acciones',
    //     'active'  => 'Activo',
    //     'buttons' => [
    //         'save'   => 'Guardar',
    //         'update' => 'Actualizar',
    //     ],
    //     'hide'              => 'Ocultar',
    //     'inactive'          => 'Inactivo',
    //     'none'              => 'Ningúno',
    //     'show'              => 'Mostrar',
    //     'toggle_navigation' => 'Abrir/Cerrar menú de navegación',
    // ],

    // 'backend' => [
    //     'access' => [
    //         'roles' => [
    //             'create'     => 'Crear Rol',
    //             'edit'       => 'Modificar Rol',
    //             'management' => 'Administración de Roles',

    //             'table' => [
    //                 'number_of_users' => 'Número de Usuarios',
    //                 'permissions'     => 'Permisos',
    //                 'role'            => 'Rol',
    //                 'sort'            => 'Orden',
    //                 'total'           => 'Todos los Roles',
    //             ],
    //         ],

    //         'users' => [
    //             'active'              => 'Usuarios activos',
    //             'all_permissions'     => 'Todos los Permisos',
    //             'change_password'     => 'Cambiar la contraseña',
    //             'change_password_for' => 'Cambiar la contraseña para :user',
    //             'create'              => 'Crear Usuario',
    //             'deactivated'         => 'Usuarios desactivados',
    //             'deleted'             => 'Usuarios eliminados',
    //             'edit'                => 'Modificar Usuario',
    //             'management'          => 'Administración de Usuarios',
    //             'no_permissions'      => 'Sin Permisos',
    //             'no_roles'            => 'No hay Roles disponibles.',
    //             'permissions'         => 'Permisos',

    //             'table' => [
    //                 'confirmed'      => 'Confirmado',
    //                 'created'        => 'Creado',
    //                 'email'          => 'Correo',
    //                 'id'             => 'ID',
    //                 'last_updated'   => 'Última modificación',
    //                 'name'           => 'Nombre',
    //                 'no_deactivated' => 'Ningún Usuario desactivado disponible',
    //                 'no_deleted'     => 'Ningún Usuario eliminado disponible',
    //                 'roles'          => 'Roles',
    //                 'social' => 'Cuenta Social',
    //                 'total'          => 'Todos los Usuarios',
    //             ],

    //             'tabs' => [
    //                 'titles' => [
    //                     'overview' => 'Resúmen',
    //                     'history'  => 'Historia',
    //                 ],

    //                 'content' => [
    //                     'overview' => [
    //                         'avatar'       => 'Avatar',
    //                         'confirmed'    => 'Confirmado',
    //                         'created_at'   => 'Creación',
    //                         'deleted_at'   => 'Deleted At',
    //                         'email'        => 'E-mail',
    //                         'last_updated' => 'Última Actualización',
    //                         'name'         => 'Nombre',
    //                         'status'       => 'Estatus',
    //                     ],
    //                 ],
    //             ],

    //             'view' => 'Ver Usuario',
    //         ],
    //     ],
    // ],

    'frontend' => [

        'auth' => [
            'login_box_title'    => 'Iniciar Sesión',
            'login_button'       => 'Iniciar Sesión',
            'login_with'         => 'Iniciar Sesión mediante :social_media',
            'register_box_title' => 'Registrarse',
            'register_button'    => 'Registrarse',
            'remember_me'        => 'Recordarme',
        ],

        'contact' => [
            'box_title' => 'Contáctenos',
            'button' => 'Enviar información',
        ],

        'contact' => [
            'box_title' => 'Contáctenos',
            'box_title_small' => 'póngase en contacto con nosotros rellenando el siguiente formulario',
            'name' => 'Tu nombre',
            'email' => 'Tu correo electrónico',
            'message' => 'Tu mensaje'
        ],

        'passwords' => [
            'forgot_password'                 => 'Se ha olvidado la contraseña?',
            'reset_password_box_title'        => 'Reiniciar contraseña',
            'reset_password_button'           => 'Reiniciar contraseña',
            'send_password_reset_link_button' => 'Enviar el correo de verificación',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Cambiar la contraseña',
            ],

            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Creado el',
                'edit_information'   => 'Modificar la información',
                'email'              => 'Correo',
                'last_updated'       => 'Última modificación',
                'name'               => 'Nombre',
                'update_information' => 'Actualizar la información',
            ],
        ],

    ],
];
