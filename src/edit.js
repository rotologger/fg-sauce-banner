import { useBlockProps } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

export default function Edit() {
  return (
    <div {...useBlockProps()}>
      <div className="container">
        <h2>{__("Sauce Banner", "fg-sauce-banner")}</h2>
        <p>
          {__(
            "Great banner to feature each sauce – shows corresponding image, title and headline if used in single post view. Picks up random recipe if used in other views.",
            "fg-sauce-banner"
          )}
        </p>
      </div>
    </div>
  );
}
