Parsedown packaged for MODx
===========================
This Extra provides a snippet [[Parsedown]] which is a wrapper for Parsedown (https://github.com/erusev/parsedown) packaged for easy use in MODx.

Parsedown (PHP lib) is a parser for Markdown with support for GFM (GitHub Flavored Markdown)

#Dev info
Assuming a directory structure like

    webroot
          ├── modx           <-- modx install
          └── parsedown-modx <-- extra source dir 

##Add the settings

key | value
--- | -----
parsedown.assets_url | /parsedown/assets/components/parsedown
parsedown.core_path | ../parsedown-modx/core/components/parsedown/

##Add a Snippet
Name: Parsedown
Is Static: [x]
Static File: [[++parsedown.core_path]]elements/snippets/snippet.parsedown.php
