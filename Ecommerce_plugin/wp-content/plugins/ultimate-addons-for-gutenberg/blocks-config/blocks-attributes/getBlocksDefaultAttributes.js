import advancedHeadingAttribute from '@Blocks/advanced-heading/attributes';
import postGridAttribute from '@Blocks/post/post-grid/attributes';
import postCarouselAttribute from '@Blocks/post/post-carousel/attributes';
import postMasonryAttribute from '@Blocks/post/post-masonry/attributes';
import sectionAttribute from '@Blocks/section/attributes';
import buttonsAttribute from '@Blocks/buttons/attributes';
import buttonsChildAttribute from '@Blocks/buttons-child/attributes';
import infoboxAttribute from '@Blocks/info-box/attributes';
import testimonialAttribute from '@Blocks/testimonial/attributes';
import teamAttribute from '@Blocks/team/attributes';
import socialAttribute from '@Blocks/social-share/attributes';
import socialChildAttribute from '@Blocks/social-share-child/attributes';
import googleMapAttribute from '@Blocks/google-map/attributes';
import iconListAttribute from '@Blocks/icon-list/attributes';
import iconListChildAttribute from '@Blocks/icon-list-child/attributes';
import priceListAttribute from '@Blocks/price-list/attributes';
import priceListChildAttribute from '@Blocks/price-list-child/attributes';
import contentAttribute from '@Blocks/timeline/content-timeline/attributes';
import contentChildAttribute from '@Blocks/timeline/content-timeline-child/attributes';
import postTimelineAttribute from '@Blocks/timeline/post-timeline/attributes';
import callToActionAttribute from '@Blocks/call-to-action/attributes';
import columnAttribute from '@Blocks/column/attributes';
import columnsAttribute from '@Blocks/columns/attributes';
import gfAttribute from '@Blocks/gf-designer/attributes';
import cf7Attribute from '@Blocks/cf7-designer/attributes';
import blockquoteAttribute from '@Blocks/blockquote/attributes';
import marketingBtnAttribute from '@Blocks/marketing-button/attributes';
import tableofContentAttribute from '@Blocks/table-of-contents/attributes';
import howToAttribute from '@Blocks/how-to/attributes';
import howToStepAttribute from '@Blocks/how-to/child-blocks/step/attributes';
import faqAttribute from '@Blocks/faq/attributes';
import faqChildAttribute from '@Blocks/faq-child/attributes';
import inlineNoticeAttribute from '@Blocks/inline-notice/attributes';
import taxonomyListAttribute from '@Blocks/taxonomy-list/attributes';
import reviewAttribute from '@Blocks/review/attributes';
import wpSearchAttribute from '@Blocks/wp-search/attributes';
import formsAttribute from '@Blocks/forms/attributes';
import formsTextareaAttribute from '@Blocks/forms/child-blocks/textarea/attributes';
import tabsAttribute from '@Blocks/tabs/attributes';
import lottieAttribute from '@Blocks/lottie/attributes';
import starRatingAttribute from '@Blocks/star-rating/attributes';
import containerAttribute from '@Blocks/container/attributes';
import imageAttribute from '@Blocks/image/attributes';

export const blocksAttributes = {
	'advanced-heading' : advancedHeadingAttribute,
	'post-grid' : postGridAttribute,
	'post-carousel' : postCarouselAttribute,
	'post-masonry' : postMasonryAttribute,
	'section' : sectionAttribute,
	'buttons' : buttonsAttribute,
	'buttons-child' : buttonsChildAttribute,
	'info-box' : infoboxAttribute,
	'testimonial' : testimonialAttribute,
	'team' : teamAttribute,
	'social-share' : socialAttribute,
	'social-share-child' : socialChildAttribute,
	'google-map' : googleMapAttribute,
	'icon-list' : iconListAttribute,
	'icon-list-child' : iconListChildAttribute,
	'restaurant-menu' : priceListAttribute,
	'restaurant-menu-child' : priceListChildAttribute,
	'call-to-action' : callToActionAttribute,
	'column' : columnAttribute,
	'columns' : columnsAttribute,
	'gf-styler' : gfAttribute,
	'cf7-styler' : cf7Attribute,
	'blockquote' : blockquoteAttribute,
	'marketing-button' : marketingBtnAttribute,
	'table-of-contents' : tableofContentAttribute,
	'how-to' : howToAttribute,
	'faq' : faqAttribute,
	'faq-child' : faqChildAttribute,
	'inline-notice' : inlineNoticeAttribute,
	'taxonomy-list' : taxonomyListAttribute,
	'review' : reviewAttribute,
	'wp-search' : wpSearchAttribute,
	'forms' : formsAttribute,
	'forms-textarea' : formsTextareaAttribute, 
	'tabs' : tabsAttribute,
	'lottie' : lottieAttribute,
	'star-rating' : starRatingAttribute,
	'content-timeline' : contentAttribute,
	'content-timeline-child' : contentChildAttribute,
    'post-timeline' : postTimelineAttribute,
    'how-to-step' : howToStepAttribute,
	'container' : containerAttribute,
	'image': imageAttribute
};
