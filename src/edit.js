import { useBlockProps } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import metadata from "./block.json";

export default function Edit() {
  return (
    <div {...useBlockProps()}>
      <div className="container">
        <h2>{__("Sauce Banner", metadata.textdomain)}</h2>
        <p>{metadata.description}</p>
      </div>
    </div>
  );
}
