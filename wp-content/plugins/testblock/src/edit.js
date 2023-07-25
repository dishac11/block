/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';
import {PanelBody,TextControl} from '@wordpress/components'
import { useBlockProps,InspectorControls } from '@wordpress/block-editor';
const {Fragment} = wp.element;
/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
//  * @return {WPElement} Element to render.
 */
export default function Edit({ attributes, setAttributes}) {
	// console.log(props);
	const {text} = attributes;
	return (
<Fragment>
	<InspectorControls>
		<PanelBody title={__("panel Title",'first edit')}
		 initialOpen={true}
		 >
		 <TextControl
            label={__("block",'first block')}
            value={ text }
            onChange={( value ) => setAttributes( {
				text:value
			})}
        />
		</PanelBody>
	</InspectorControls>
	<div {...useBlockProps({
		className:'class_info'
	})}>
	<h2>{text}</h2>
	</div>
</Fragment>
	);
}
