/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';
import save from './save';
/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function Save({attributes}) {

	const {text} = attributes;
	return (
		// <p { ...useBlockProps.save() }>
		// 	{ 'Testblock – hello from the saved content!' }
		// </p>
		<div { ...useBlockProps.save(
			{
				className:'class_info'
			}
		) }>
		<h2>
			{text}
		</h2>
		</div>
	);
}
