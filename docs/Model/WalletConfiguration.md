# # WalletConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**header_background_color** | **mixed** |  |
**header_button_color** | **mixed** |  |
**left_menu_header_background_color** | **mixed** |  |
**left_menu_header_font_color** | **mixed** |  |
**left_menu_section_background_color** | **mixed** |  |
**left_menu_section_font_color** | **mixed** |  |
**company_logo_url** | **mixed** |  |
**header_image_url** | **mixed** |  | [optional]
**header_custom_icon** | **mixed** |  | [optional]
**welcome_message** | **mixed** |  |
**is_apple_enabled** | **mixed** |  |
**is_google_enabled** | **mixed** |  |
**is_samsung_enabled** | **mixed** |  |
**is_ad_credits** | **mixed** |  |
**is_static_vouchers** | **mixed** |  |
**is_dynamic_vouchers** | **mixed** |  |
**is_membership_tier** | **mixed** |  |
**is_membership_points** | **mixed** |  |
**is_membership_level** | **mixed** |  |
**is_gift_cards** | **mixed** |  |
**is_gift_certificates** | **mixed** |  |
**is_promotions** | **mixed** |  |
**is_merchant_credit** | **mixed** |  |
**is_tickets** | **mixed** |  | [optional]
**is_news_articles** | **mixed** |  |
**is_performances** | **mixed** |  |
**is_messages** | **mixed** |  |
**is_call** | **mixed** |  |
**is_representatives** | **mixed** |  |
**is_products** | **mixed** |  |
**is_services** | **mixed** |  |
**is_room_rates** | **mixed** |  |
**is_amenities** | **mixed** |  |
**is_gaming** | **mixed** |  |
**is_dining** | **mixed** |  |
**is_lounges** | **mixed** |  |
**is_map_directions** | **mixed** |  |
**is_link_book** | **mixed** |  |
**is_image_grid** | **mixed** |  |
**is_videos** | **mixed** |  |
**is_transaction_history** | **mixed** |  |
**is_profile** | **mixed** |  |
**is_settings** | **mixed** |  |
**is_chat_room** | **mixed** |  |
**is_sms_opt_in** | **mixed** |  |
**sms_opt_in_source_id** | [**\OpenAPI\Client\Model\WTWalletConfigurationSaveWalletRecordSmsOptInSourceID**](WTWalletConfigurationSaveWalletRecordSmsOptInSourceID.md) |  | [optional]
**is_email_subscriber** | **mixed** |  |
**google_analytics_id** | **mixed** |  | [optional]
**facebook_pixel_id** | **mixed** |  | [optional]
**public_chat_room_channel_id** | **mixed** |  | [optional]
**vanity_handle** | **mixed** |  | [optional]
**vanity_page_wallet_prefix** | **mixed** |  | [optional]
**merchant_credit_payment_design_id** | **mixed** |  | [optional]
**custom_domain** | **mixed** |  | [optional]
**is_claimed** | **mixed** |  | [optional]
**mobile_app_icon_url** | **mixed** |  | [optional]
**is_age_gate** | **mixed** |  | [optional]
**is_flip_required_for_qr** | **mixed** |  | [optional]
**age_gate_minimum** | **mixed** |  | [optional]
**age_gate_decline_url** | **mixed** |  | [optional]
**social_instagram_url** | **mixed** |  | [optional]
**social_facebook_url** | **mixed** |  | [optional]
**social_you_tube_url** | **mixed** |  | [optional]
**social_twitter_url** | **mixed** |  | [optional]
**social_linked_in_url** | **mixed** |  | [optional]
**social_background_color** | **mixed** |  | [optional]
**social_font_color** | **mixed** |  | [optional]
**primary_phone_number** | **mixed** |  | [optional]
**primary_whats_app** | **mixed** |  | [optional]
**primary_email_address** | **mixed** |  | [optional]
**custom_js** | **mixed** |  | [optional]
**custom_css** | **mixed** |  | [optional]
**non_mobile_redirect_url** | **mixed** |  | [optional]
**apple_app_store_url** | **mixed** |  | [optional]
**google_play_store_url** | **mixed** |  | [optional]
**pass_brand_kit** | [**\OpenAPI\Client\Model\WTWalletConfigurationSaveWalletRecordPassBrandKit**](WTWalletConfigurationSaveWalletRecordPassBrandKit.md) |  | [optional]
**login_logo_url** | **mixed** |  | [optional]
**login_panel_image_url** | **mixed** |  | [optional]
**login_headline** | **mixed** |  | [optional]
**login_subcopy** | **mixed** |  | [optional]
**login_background_color** | **mixed** |  | [optional]
**login_background_image_url** | **mixed** |  | [optional]
**register_url** | **mixed** |  | [optional]
**login_footer_links** | **mixed** |  | [optional]
**desktop_frame_logo_url** | **mixed** |  | [optional]
**desktop_frame_background_color** | **mixed** |  | [optional]
**desktop_frame_background_image_url** | **mixed** |  | [optional]
**desktop_frame_byline** | **mixed** |  | [optional]
**id** | **string** |  |
**created_at** | **mixed** |  |
**updated_at** | **mixed** |  |
**merchant_id** | **string** |  |
**android_sha256_fingerprint** | **mixed** | SHA-256 fingerprint of the merchant&#39;s Android signing certificate, in Android&#39;s colon-separated uppercase hex format (e.g. \&quot;A1:B2:C3:...\&quot;). Populated by the POST /v2/wallet/android/keystore endpoint and consumed by the assetlinks.json endpoint so Google can verify the merchant&#39;s TWA ownership. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
