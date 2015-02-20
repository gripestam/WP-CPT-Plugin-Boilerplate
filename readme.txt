<!-- Explanations from O3 and Wordpress.org -->

LABELS
---------------------------------------

Post Type Name - Must be unique.
Label: Name - General name for the post type, usually plural.
Label: Singular Name - Name for one object of this post type. Defaults to value of name.
Label: Add New - The add new text. The default is "Add New" for both hierarchical and non-hierarchical types.
Label: All Items - The all items text used in the menu. Default is the "Name" label.

Label: Add New Item - The add new item text. Default is "Add New Post" / "Add New Page".
Label: Edit Item - The edit item text. Default is "Edit Post" / "Edit Page".

Label: New Item - The new item text. Default is "New Post" / "New Page".
Label: View Item - The view item text. Default is "View Post" / "View Page".
Label: Search Items - The search items text. Default is "Search Posts" / "Search Pages".
Label: Not Found - The not found text. Default is "No posts found" / "No pages found".
Label: Not Found In Trash - The not found in trash text. Default is "No posts found in Trash" / "No pages found in Trash".
Label: Parent Item Colon - The parent text. This string isn't used on non-hierarchical types. In hierarchical ones the default is "Parent Page:".
Label: Menu Name - The menu name text. This string is the name to give menu items. Defaults to value of name.
Description - (optional) A short descriptive summary of what the post type is. Default: blank.




ARGUMENTS
----------------------------------------

Public (true/false) - (optional) Whether a post type is intended to be used publicly either via the admin interfaces or by front-end users. Default: false

Exclude from Search (true/false) - Whether to exclude posts with this post type from front end search results. Default: value of the opposite of the public argument.

Publicly Queryable (true/false) - (optional) Whether queries can be performed on the front end as part of the parse_request(). Default: value of the public argument.

Show UI (true/false) - (optional) Whether to generate a defualt UI for managing this post type in the admin. Default: value of public argument.

Show in Nav Menus (true/false) - (optional) Whether post_type is available for selection in navigation menus. Default: value of public argument.

Show in Menu (true/false) - (optional) Whether to show the post type in the admin menu. show_ui must be true. Default: value of show_ui argument.

Show in Admin Bar (true/false) - (optional) Whether to make this post type available in the WordPress admin bar. Default: value of the show_in_menu argument.

Menu Position - (optional) The position in the menu order the post type should appear. show_in_menu must be true. Default: null - defaults to below Comments
5 - below Posts
10 - below Media
15 - below Links
20 - below Pages
25 - below Comments
60 - below First Separator
65 - below Plugins
70 - below Users
75 - below Tools
80 - below Settings
100 - below Second Separator

Menu Icon - (optional) The url to the icon to be used for this menu. Default: null - defaults to the posts icon. Leave empty for null. Use absolute path or dashicons (https://developer.wordpress.org/resource/dashicons/).

Capability Type (post/page/?) - (optional) The string to use to build the read, edit, and delete capabilities. May be passed as an array to allow for alternative plurals when using this argument as a base to construct the capabilities, e.g. array(story','stories'). By default the capability_type is used as a base to construct capabilities. Default: post. These built-in types cannot be used: attachment, mediapage

Hierarchical (true/false) - (optional) Whether the post type is hierarchical (e.g. page). Allows Parent to be specified. Default: false.

Supports - (optional) An alias for calling add_post_type_support() directly. Default: title and editor.
* title
* editor
* author
* thumbnail
* excerpt
* trackbacks
* custom Fields
* comments
* revisions
* page Attributes
* post Formats

Has Archive (true/false) - (optional) Enables post type archives. Will use $post_type as archive slug by default. Default: false.

Rewrite: Slug - (optional) Triggers the handling of rewrites for this post type. To prevent rewrites, set to false by putting no content in these fields. Default: true and uses $post_type as slug.

Rewrite: With Front - (optional) Triggers the handling of rewrites for this post type. To prevent rewrites, set to false by putting no content in these fields. Default: true and uses $post_type as slug. This string will preprend the slug with a front base.

Query Var (true/false) - (optional) Sets the query_var key for this post type. Default: true - set to $post_type.

Can Export (true/false) - (optional) Enables exporting of this post_type. Default: true.



DASHICONS
----------------------------------------
All icons here:
https://developer.wordpress.org/resource/dashicons/
http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/


TRANSLATION
----------------------------------------
Use PoEdit to translate the strings. http://poedit.net/