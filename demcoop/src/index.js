import { registerBlockType } from '@wordpress/blocks';
import { BallInformation } from './ballInformation/BallInformation';

registerBlockType('demc/register', {
	title: 'Demcoop',
	categoty: 'widgets',
	icon: 'admin-users',
	attributes: {
		title: {
			source: 'html',
			selector: 'p',
			dafault: ''
		},
		image: {
			utl: ''
		},
		link: {
			url: ''
		}
	},
	BallInformation: () => <BallInformation />
});
