import { RichText } from '@wordpress/block-editor';

export const BallInformation = ({ attributes, setAttributes }) => {
	const { title } = attributes;
	return (
		<>
			<div className='container-rounded__services'>
				<img src='/credito.svg' alt='como asociarme' />
				<RichText
					tagName='p'
					placeHolder='título del elemento'
					className='title-rounded__element'
					value={title}
					onChange={(title) => setAttributes({ title })}
				/>
				<p>{title}</p>
				<img src='/right-arrow.svg' alt='Ir a seccion' style='cursor: pointer' />
			</div>
		</>
	);
};
