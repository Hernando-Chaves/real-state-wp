<?php 

$fields = 
[
	/*BASICO*/
	'field_5e693c455b590', /*Direccion*/
	'field_5e693af20c330', /*Area*/
	// 'field_5e6d6980dbc62', /*Agente Encargado*/
	'field_5e693c605b591', /*Precio*/
	'field_5e693b950c334', /*Acueducto*/
	'field_5e693b670c333', /*Electricidad*/
	'field_5e693b270c332', /*Gas*/
	'field_5e6940f9d7b9e', /*Teléfono*/
	'field_5e693bb5ca63b', /*Baños*/
	'field_5e694056c3456', /*Cocinas*/
	'field_5e69406dc3457', /*Garaje*/
	'field_5e69408bc3458', /*Cuartos*/
];
acf_register_form(
[
	'id'		    	=> 'nva-propiedad',
	'post_id'	    	=> 'new_post',
	'new_post'			=> 
	[
		'post_type'		=> 'propiedad',
		'post_status'	=> 'draft'
	],
	'post_title'		=> true,
	'post_content'  	=> true,
	'uploader'      	=> 'wp',
	'return'			=> home_url('contacto'),
	// 'field_groups'=> [32],
	'fields'				=> false,
	'submit_value'		=> 'Crear Propiedad'
]);
// Load the form
acf_form([
	'id'		    	=> 'nva-propiedad',
	'post_id'	    	=> 'new_post',
	'new_post'			=> 
	[
		'post_type'		=> 'propiedad',
		'post_status'	=> 'draft'
	],
	'post_title'		=> true,
	'post_content'  	=> true,
	'uploader'      	=> 'wp',
	'return'			=> home_url('contacto'),
	// 'field_groups'=> [32],
	'fields'				=> false,
	'submit_value'		=> 'Crear Propiedad'
]);