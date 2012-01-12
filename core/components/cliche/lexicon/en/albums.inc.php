<?php
/**
 * Default Manager English Lexicon Entries for Cliche
 *
 * @package cliche
 * @subpackage lexicon
 */
 
/* CARD - ALBUMS LIST */

$_lang['cliche.title'] = 'Cliche';
$_lang['cliche.saving_msg'] = 'Saving, please Wait...';
$_lang['cliche.back_to_album_list'] = 'Back to albums list';
$_lang['cliche.back_to_album'] = 'Back to album';

//buttons
$_lang['cliche.add_album_btn'] = 'Create a new album';

//Create or update album window
$_lang['cliche.album_name_label'] = 'Album name (required)';
$_lang['cliche.album_desc_label'] = 'Quick description';
$_lang['cliche.create_album_title'] = 'Your album';
$_lang['cliche.save_album_btn'] = 'Save';

//Error messages from the backend


//view
$_lang['cliche.album-list.empty_msg'] = '<h4>There are no albums created yet</h4><p>Create your first album using the button above, then click the newly created item to view its content.<br/>Use the breadcrumbs to navigate back and forth in the albums (The current green element is not clickable)</p>';
$_lang['cliche.album-empty-col-msg'] = 'Select an item from the main column to view its description';
$_lang['cliche.list.empty_col_msg'] = '<div class="empty-msg">Select an album from the main column to view its description</div>';
$_lang['cliche.main_total_pics'] = '{total} Images';

//msg
$_lang['cliche.breadcrumb_album_list_desc'] = '<h3>Album List</h3><p>Select an album to view its contents.</p>';


/* CARD - ITEMS LIST */

//View
$_lang['cliche.items_empty_msg'] = '<h4>There are no image in this album</h4><p>Add images by clicking the green button "Add Images"</p>';
$_lang['cliche.items_empty_col_msg'] = '<div class="empty-msg">Select an image from the main column to see its description</div>';
$_lang['cliche.album_cover_alt_msg'] = '{name} preview';
$_lang['cliche.view_total_pics'] = 'Total Images';
//buttons
$_lang['cliche.add_images'] = 'Add Images';
$_lang['cliche.update_album'] = 'Update album';
$_lang['cliche.delete_album'] = 'Delete album';

//msg
$_lang['cliche.delete_album_msg'] = 'All pitctures in this album will also be deleted. This operation is irreversible.';
$_lang['cliche.breadcrumbs_album_msg'] = '<div class="album-desc"><tpl if="cover_id == 0">
		<span class="no-preview">No preview</span>
	</tpl>
	<tpl if="cover_id">
		<img src="{thumbnail}" title="Image Cover for the album {name}" alt="Image Cover for the album {name}" />
	</tpl>
	<div class="album_name"><h3>Album : <span>{name}</span></h3>
		Created on <strong>{createdon}</strong> by <strong>{createdby}</strong><br/>
		Album id : #<strong>{id}</strong>
	</div>
	<div class="album_meta">
		<span>{total}</span>
		Images
	</div></div>';

/* CARD - SINGLE ITEM */

//buttons
$_lang['cliche.edit_image'] = 'Edit image';
$_lang['cliche.edit_image_msg'] = 'Edit the informations for your image';
$_lang['cliche.delete_image'] = 'Delete image';
$_lang['cliche.delete_image_msg'] = 'Are you sur you want to delete this image ?';
$_lang['cliche.set_as_album_cover'] = 'Set as Album cover';
$_lang['cliche.set_as_album_cover_msg'] = 'Do you want to set this image as your album cover ?';
$_lang['cliche.add_photo'] = 'Add Images';

//msg
$_lang['cliche.delete_image_title'] = 'Remove Image';
$_lang['cliche.delete_image_msg'] = 'Are you sure you want to delete this image ? This operation is irreversible.';
$_lang['cliche.breadcrumbs_item_msg'] = 'Viewing Image : ';

/* CARD - UPLOAD ITEMS */

//view
$_lang['cliche.upload_desc'] = '<h4>Select files from your computer</h4><p>You can select several files at a time by holding the shift key.</p>';
$_lang['cliche.upload_ready_msg'] = 'Files ready to be uploaded :';
$_lang['cliche.upload_cancel_msg'] = 'Cancel';

//buttons
$_lang['cliche.browse'] = 'Browse...';
$_lang['cliche.start_upload'] = 'Start Upload';

//msg
$_lang['cliche.breadcrumbs_upload_pictures_msg'] = 'Upload Images'; 
$_lang['cliche.upload_in_progress'] = 'Upload in progress...'; 
$_lang['cliche.upload_items_for'] = '<h3>Images Uploader</h3><p>Upload new images for the album <strong>'; 
$_lang['cliche.upload_successful'] = 'Files uploaded successfully'; 

//NOT USED YET
$_lang['cliche.global_progressbar_loading_item'] = 'Loading item'; 
$_lang['cliche.item_progressbar'] = '% completed...'; 


/* MGR - COMMONS */
//tabs
$_lang['cliche.main_tab'] = 'Manage your albums';
//Breadcrumbs
$_lang['cliche.breadcrumb_root'] = 'Album list';
//buttons
$_lang['cliche.close_btn'] = 'Cancel';
//misc
$_lang['cliche.actions'] = 'Actions';
$_lang['cliche.sort_by'] = 'Sort by';
$_lang['cliche.created_by'] = 'Created by';
$_lang['cliche.created_on'] = 'Created on';
// $_lang['cliche.sort_by_createdon'] = 'Creation date';
// $_lang['cliche.sort_by_total_pics'] = 'Number of pictures';
// $_lang['cliche.sort_by_alphabetically'] = 'Alphabetically';
$_lang['cliche.desc_title'] = 'Description';
$_lang['cliche.informations_title'] = 'Informations';
$_lang['cliche.no_desc'] = '<em>No description</em>';
$_lang['cliche.no_preview'] = 'No preview';
$_lang['cliche.loading'] = '<div class="centered empty-msg">Loading...</div>';