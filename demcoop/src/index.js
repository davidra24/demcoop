import { registerBlockType } from '@wordpress/blocks';

registerBlockType('demc/register', {
	title: 'Register',
	categoty: 'widgets',
	icon: 'admin-users',
	edit: () => <h2>Hola mundo</h2>,
	save: () => <h2>Hola mundo</h2>
});
