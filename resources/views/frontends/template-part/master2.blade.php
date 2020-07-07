<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#151515">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#151515">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#151515">
		<title>SCity - Quản lý môi trường đô thị</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56"href="{{asset('assets/frontends/images/fav-icon/icon.png')}}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css"href="{{asset('assets/frontends/css/style.css')}}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css"href="{{asset('assets/frontends/css/responsive.css')}}">
		<!-- Theme-Color css -->
		<link rel="stylesheet" id="jssDefault"href="{{asset('assets/frontends/css/color.css')}}">
		<!-- Custom css -->
		<link rel="stylesheet" id="jssDefault"href="{{asset('assets/frontends/css/custom.css')}}">
		<!-- Boostrap css-->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/frontends/vendor/boostrap/css/boostrap.min.css')}}">


		<link href="{{asset("files/css.css")}}">
		<link href="{{asset('files/bootstrap.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('files/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('all.min.css')}}">

		<link  rel="stylesheet" href="{{asset('files/flag-icon.css')}}">
		<link rel="stylesheet" href="{{asset('files/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('files/style.min.css')}}">
		<link rel="stylesheet" href="{{asset('files/style-responsive.min.css')}}">
		<link  id="theme" rel="stylesheet" href="{{asset('files/default.css')}}">

{{--		<script href="{{asset('files/leaflet.js')}}"></script>--}}
{{--		<script href="{{asset('files/mapbox-gl.js')}}"></script>--}}
{{--		<script href="{{asset('files/leaflet-mapbox-gl.js')}}"></script>--}}
		<link rel="stylesheet" href="{{asset('files/leaflet.css')}}">
		<link rel="stylesheet" href="{{asset('files/mapbox-gl.css')}}">
		<link rel="stylesheet" integrity="sha256-YjcCvXkdRVOucibC9I4mBS41lXPrWfqY2BnpskhZPnw=" crossorigin="anonymous" href="{{asset('files/flag-icon.min.css')}}">
		<link rel="stylesheet" href="{{asset('files/myapp.css')}}">
		<style>
			.service-style-two .single-block .img-box img {
				width: 366px;
				height: 265px;
			}
			.annoucementContent{
				background: yellow !important;
				color: #000;
				font-weight: bold;
				box-sizing: border-box;
				border: 2px dashed #222;

			}
			.submenu{
				background: #039BE5 !important;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="{{asset('files/chosen.css')}}">
		<style type="text/css">
			.indicatorAQI{
				width: 100%;
				color: #000 !important;
			}
			#map-canvas{
				height: 400px;
				width: 100%;
			}
			#map-container{
				position: relative;
			}

			.aqi_indexs {
				background-color: #fff;
				position: absolute;
				right: 20px;
				top: 10px;
				z-index: 999;
				height: 42px;
				width: 500px;
				box-shadow: 0px 0px 3px 0px rgba(117,117,117,1);
				-webkit-box-shadow: 0px 0px 3px 0px rgba(117,117,117,1);
				-moz-box-shadow: 0px 0px 3px 0px rgba(117,117,117,1);
				padding: 4px;
				padding-top: 0;
			}
			.free_aqi_indexs {
				width: 100%;
				position: relative;
				right: 0;
			}
			.aqi_indexs td {
				width: 15%;
				height: 8px;
			}
			.aqi_indexs .leveltext {
				height: 20px;
				color: #222;
				padding: 0 !important;
				font-size: 8px;
				font-weight: bold;
			}
			.aqi_indexs .level {
				height: 6px;
				padding: 0;
				padding: 0 !important;
				color: transparent;
				line-height: 6px !important;
			}
			.notez{
				font-style: italic;
				font-weight: bold;
			}
			#map{
				border:1px solid #aaa;
				height: 380px;
				position:relative;
				background-size: cover;
			}

			#map >button{
				position:absolute;
				width:32px;
				height:32px;
				background:none;
				border:none;
				outline:none;
				background-size: cover;
			}
			#map >button>span{
				position: absolute;
				top: 2px;
				left: 0;
				color: #000;
				width: 32px;
				font-size: 12px;
				text-align: center;
				font-weight: bold;
			}
			.selectedMenu{
				font-weight: bold;
			}
		</style>
		<style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }
			[touch-action="auto"]{ -ms-touch-action: auto; touch-action: auto; }
			[touch-action~="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }
			[touch-action~="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }
			[touch-action~="pan-up"]{ -ms-touch-action: pan-up; touch-action: pan-up; }
			[touch-action~="pan-down"]{ -ms-touch-action: pan-down; touch-action: pan-down; }
			[touch-action~="pan-left"]{ -ms-touch-action: pan-left; touch-action: pan-left; }
			[touch-action~="pan-right"]{ -ms-touch-action: pan-right; touch-action: pan-right; }
		</style>
		<style type="text/css">:root topadblock, :root script[src^="http://free-shoutbox.net/app/webroot/shoutbox/sb.php?shoutbox="] + #freeshoutbox_content, :root input[onclick^="window.open('http://www.FriendlyDuck.com/"], :root img[alt^="Fuckbook"], :root iframe[src^="http://static.mozo.com.au/strips/"], :root iframe[id^="google_ads_iframe"], :root div[jscontroller="U835zd"] + c-wiz[jsrenderer="YnuqN"], :root div[id^="zergnet-widget"], :root div[id^="traffective-ad-"], :root div[id^="sticky_ad_"], :root div[id^="q1-adset-"], :root div[id^="proadszone-"], :root div[id^="mainads"], :root div[id^="lazyad-"], :root div[id^="google_dfp_"], :root div[id^="google_ads_iframe_"], :root div[id^="dmRosAdWrapper"], :root div[id^="div-gpt-ad"], :root div[id^="div-adtech-ad-"], :root div[id^="dfp-slot-"], :root div[id^="dfp-ad-"], :root div[id^="block-views-topheader-ad-block-"], :root div[id^="advt-"], :root div[id^="ads300_600-widget"], :root input[onclick^="window.open('http://www.friendlyduck.com/"], :root div[id^="ads300_250-widget"], :root div[id^="ads300_100-widget"], :root div[id^="ads250_250-widget"], :root div[id^="ads120_600-widget"], :root div[id^="adrotate_widgets-"], :root div[id^="adfox_"], :root div[id^="ad_script_"], :root div[id^="ad_rect_"], :root div[id^="ad_position_"], :root div[id^="ad-server-"], :root div[id^="ad-cid-"], :root div[id^="acm-ad-tag-"], :root div[id^="YFBMSN"], :root div[id^="ADV-SLOT-"], :root div[data-spotim-slot], :root div[data-role="sidebarAd"], :root div[data-native_ad], :root div[data-id-advertdfpconf], :root div[data-adunit], :root div[data-adunit-path], :root div[class^="proadszone-"], :root div[class^="pane-google-admanager-"], :root a[href^="http://adultgames.xxx/"], :root a[href^="http://semi-cod.com/clicks/"], :root div[class^="index_displayAd_"], :root a[href^="http://www.affbuzzads.com/affiliate/"], :root div[class^="index_adBeforeContent_"], :root div[class^="index_adAfterContent_"], :root a[href^="http://dwn.pushtraffic.net/"], :root div[class^="hp-ad-rect-"], :root div[class^="gemini-ad"], :root div[class^="block-openx-"], :root div[class^="ads-partner-"], :root div[class^="ad_border_"], :root a[href^="http://adprovider.adlure.net/"], :root div[class^="Ad__container"], :root div[class*="_AdInArticle_"], :root div[class^="ad_position_"], :root a[href^="http://www.afco2go.com/srv.php?"], :root div[aria-label="Ads"], :root div > [class][onclick*=".updateAnalyticsEvents"], :root a[href*="/servlet/click/zone?"], :root c-wiz[jsrenderer="YnuqN"] > div > div > .Rn1jbe, :root bottomadblock, :root a[href^="https://watchmygirlfriend.tv/"], :root aside[itemtype="https://schema.org/WPAdBlock"], :root a[href^="http://c.actiondesk.com/"], :root aside[id^="div-gpt-ad"], :root a[href^="http://lp.ezdownloadpro.info/"], :root a[href^="http://uploaded.net/ref/"], :root aside[id^="advads_ad_widget-"], :root aside[id^="adrotate_widgets-"], :root amp-ad-custom, :root [id*="MGWrap"], :root ad-desktop-sidebar, :root a[style="display:block;width:300px;min-height:250px"][href^="http://li.cnet.com/click?"], :root div[id^="div-ads-"], :root a[href^="http://at.atwola.com/"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="http://popup.taboola.com/"], :root a[href^="//adbit.co/?a=Advertise&"], :root a[onmousedown^="this.href='/wp-content/embed-ad-content/"], :root div[class^="AdhesionAd_"], :root div[class^="Ad__bigBox"], :root div[role="navigation"] + c-wiz > script + div > .kxhcC, :root a[onclick*="//m.economictimes.com/etmack/click.htm"], :root a[href^="https://www.travelzoo.com/oascampaignclick/"], :root a[href^="https://www.share-online.biz/affiliate/"], :root a[href^="https://www.securegfm.com/"], :root DFP-AD, :root a[href^="//porngames.adult/?SID="], :root a[href^="https://www.oneclickroot.com/?tap_a="] > img, :root div[id^="advads_"], :root a[href^="https://www.moscarossa.biz/"], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="http://webgirlz.online/landing/"], :root a[href^="https://www.g4mz.com/"], :root .trc_related_container div[data-item-syndicated="true"], :root a[href^="https://www.firstload.com/affiliate/"], :root a[href^="https://www.clicktraceclick.com/"], :root a[href^="https://www.camyou.com/?cam="][href*="&track="], :root a[href^="https://www.bebi.com"], :root a[href^="https://www.adskeeper.co.uk/"], :root a[href^="http://farm.plista.com/pets"], :root a[href^="https://windscribe.com/promo/"], :root a[href^="http://ad-emea.doubleclick.net/"], :root a[href^="https://understandsolar.com/signup/?lead_source="][href*="&tracking_code="], :root div[id^="tms-ad-dfp-"], :root a[href^="https://trust.zone/go/r.php?RID="], :root a[href^="https://track.adform.net/"], :root a[href^="https://traffic.bannerator.com/"], :root a[href^="https://tracking.truthfinder.com/?a="], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root a[href^="https://track.healthtrader.com/"], :root a[href^="https://track.clickmoi.xyz/"], :root a[href^="https://track.afftck.com/"], :root a[href^="https://control.trafficfabrik.com/"], :root a[href^="https://track.52zxzh.com/"], :root .ra[align="right"][width="30%"], :root a[href^="https://tour.mrskin.com/"], :root a[href^="https://www.what-sexdating.com/"], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://t.mobtya.com/"], :root a[href^="https://t.hrtyj.com/"], :root a[href^="https://t.hrtye.com/"], :root div[id^="ad_head_celtra_"], :root a[href^="https://t.grtyi.com/"], :root aside[id^="tn_ads_widget-"], :root a[href^="https://syndication.exoclick.com/splash.php?"], :root div[id^="ad-div-"], :root a[href^="https://secure.eveonline.com/ft/?aid="], :root div[class^="Display_displayAd"], :root a[href^="https://secure.bstlnk.com/"], :root a[href^="https://rev.adsession.com/"], :root div[id^="yandex_ad"], :root a[href^="http://y1jxiqds7v.com/"], :root a[href^="https://www.hotgirls4fuck.com/"], :root a[href^="https://www.pornhat.com/"][rel="nofollow"], :root AD-SLOT, :root a[href^="https://pubads.g.doubleclick.net/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"], :root #rhs_block .mod > .gws-local-hotels__booking-module, :root a[href^="http://www.my-dirty-hobby.com/?sub="], :root a[href^="https://porndeals.com/?track="], :root a[href^="https://offerforge.net/"], :root a[href^="https://my-movie.club/"], :root a[href^="https://mk-cdn.net/"], :root a[href^="https://mk-ads.com/"], :root a[href^="https://medleyads.com/"], :root a[href*=".approvallamp.club/"], :root a[href^="https://landing1.brazzersnetwork.com"], :root a[href^="https://land.rk.com/landing/"], :root .lads[width="100%"][style="background:#FFF8DD"], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://members.linkifier.com/public/affiliateLanding?refCode="], :root a[href^="https://jmp.awempire.com/"], :root a[href^="https://incisivetrk.cvtr.io/click?"], :root a[href^="https://iactrivago.ampxdirect.com/"], :root .gbfwa > div[class$="_item"], :root a[href^="https://goraps.com/"], :root a[href^="http://www.usearchmedia.com/signup?"], :root a[onmousedown^="this.href='http://staffpicks.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="https://googleads.g.doubleclick.net/pcs/click"], :root a[href^="http://cdn.adstract.com/"], :root a[href^="https://gogoman.me/"], :root a[href^="https://go.stripchat.com/"][href*="&campaignId="], :root a[href*=".inclk.com/"], :root a[href^="https://go.ad2up.com/"], :root a[href^="https://freeadult.games/"], :root a[href^="//nlkdom.com/"], :root a[onmousedown^="this.href='http://staffpicks.outbrain.com/network/redir?"][target="_blank"], :root a[href^="https://fonts.fontplace9.com/"], :root a[href^="http://clkmon.com/adServe/"], :root a[href^="https://flirtaescopa.com/"], :root [lazy-ad="leftthin_banner"], :root a[href^="https://dynamicadx.com/"], :root a[href^="http://wxdownloadmanager.com/dl/"], :root div[class^="local-feed-banner-ads"], :root .GFYY1SVE2 > .GFYY1SVD2 > .GFYY1SVG5, :root a[href^="https://djtcollectorclub.org/"][href*="?affiliate_id="], :root a[href^="https://retiremely.com/"], :root a[href^="https://cpmspace.com/"], :root a[href^="https://lingthatsparleso.info/"], :root a[href^="https://click.plista.com/pets"], :root a[href^="https://chaturbate.xyz/"], :root a[href^="http://look.djfiln.com/"], :root a[href^="https://chaturbate.jjgirls.com/"][href*="?tour="], :root a[href^="https://chaturbate.com/in/?tour="], :root a[href^="https://chaturbate.com/affiliates/"], :root .mod > ._jH + .rscontainer, :root a[href^="https://blackorange.go2cloud.org/"], :root a[href^="http://www.1clickdownloader.com/"], :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="https://awentw.com/"], :root a[href^="http://adultfriendfinder.com/p/register.cgi?pid="], :root a[href^="https://www.popads.net/users/"], :root iframe[src^="http://ad.yieldmanager.com/"], :root a[href^="http://pubads.g.doubleclick.net/"], :root a[href^="https://sexdatingz.live/"], :root a[href^="//bwnjijl7w.com/"], :root a[href^="https://adultfriendfinder.com/go/page/landing"], :root a[href*="pussl3.com"], :root a[href^="https://adswick.com/"], :root ADS-RIGHT, :root .GKJYXHBF2 > .GKJYXHBE2 > .GKJYXHBH5, :root a[href^="https://adserver.adreactor.com/"], :root a[href^="https://adnetwrk.com/"], :root a[href^="https://refpaano.host/"], :root a[href^="https://meet-to-fuck.com/tds"], :root a[href^="http://data.linoleictanzaniatitanic.com/"], :root a[href^="https://adhealers.com/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="http://zevera.com/afi.html"], :root a[href^="http://go.oclaserver.com/"], :root a[href^="https://ad.atdmt.com/"], :root .trc_rbox .syndicatedItem, :root a[href^="https://aaucwbe.com/"], :root a[href^="https://a.adtng.com/"], :root a[href^="https://8a1ccf65f2b1302.com/"], :root a[href^="http://xtgem.com/click?"], :root a[href^="https://ads.trafficpoizon.com/"], :root a[href^="http://rekoverr.com/"], :root a[href^="https://chaturbate.com/in/?track="], :root div[id^="cns_ads_"], :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://www1.clickdownloader.com/"], :root a[href^="http://www.zergnet.com/i/"], :root a[href^="http://hyperies.info/"], :root a[href^="http://www.torntv-downloader.com/"], :root a[href^="http://www.tirerack.com/affiliates/"], :root div[class^="AdBannerWrapper-"], :root a[href^="http://www.text-link-ads.com/"], :root a[href^="http://www.streamate.com/exports/"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href^="http://www.sfippa.com/"], :root a[href^="http://www.xmediaserve.com/"], :root a[href^="http://www.sex.com/videos/?utm_"], :root a[href^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://www.sex.com/?utm_"], :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href^="http://www.roboform.com/php/land.php"], :root a[href^="http://secure.signup-page.com/"], :root a[href^="http://www.quick-torrent.com/download.html?aff"], :root a[href^="http://easydownload4you.com/"], :root a[href^="http://ffxitrack.com/"], :root a[href^="https://www.im88trk.com/"], :root a[href^="http://adexprt.me/"], :root a[href^="http://www.pinkvisualgames.com/?revid="], :root a[href^="https://trklvs.com/"], :root a[href^="http://www.paddypower.com/?AFF_ID="], :root a[href^="http://www.freefilesdownloader.com/"], :root a[href^="http://www.mysuperpharm.com/"], :root .trc_rbox_border_elm .syndicatedItem, :root a[href^="http://www.myfreepaysite.com/sfw_int.php?aid"], :root a[href^="http://www.myfreepaysite.com/sfw.php?aid"], :root div[id^="advads-"], :root a[href^="http://www.myfreecams.com/?co_id="][href*="&track="], :root .rhsvw[style="background-color:#fff;margin:0 0 14px;padding-bottom:1px;padding-top:1px;"], :root a[href^="http://www.moneyducks.com/"], :root a[href^="http://bcntrack.com/"], :root a[href^="http://www.securegfm.com/"], :root a[href^="http://www.liversely.net/"], :root a[href^="http://www.linkbucks.com/referral/"], :root a[href^="//88d7b6aa44fb8eb.com/"], :root a[href^="http://www.ireel.com/signup?ref"], :root a[href*="=Adtracker"], :root a[href^="http://www.incredimail.com/?id="], :root a[href^="http://www.idownloadplay.com/"], :root a[href^="http://www.hitcpm.com/"], :root a[href^="http://fusionads.net"], :root a[href^="http://www.hibids10.com/"], :root a[href^="http://www.gamebookers.com/cgi-bin/intro.cgi?"], :root div[id^="div_openx_ad_"], :root a[href^="http://www.friendlyquacks.com/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href*="emprestimo.eu"], :root a[href^="https://content.oneindia.com/www/delivery/"], :root a[href^="http://www.fpcTraffic2.com/blind/in.cgi?"], :root a[href^="http://www.fleshlight.com/"], :root a[href^="http://www.flashx.tv/downloadthis"], :root div[class^="SponsoredAds"], :root .trc_rbox_div a[target="_blank"][href^="http://tab"], :root a[href^="https://americafirstpolls.com/"], :root a[href^="http://clickserv.sitescout.com/"], :root a[href^="http://www.firstload.de/affiliate/"], :root a[href^="http://www.twinplan.com/AF_"], :root a[href^="http://www.fducks.com/"], :root a[href^="http://www.epicgameads.com/"], :root a[href^="http://www.easydownloadnow.com/"], :root a[href^="http://www.duckssolutions.com/"], :root a[href^="https://go.trkclick2.com/"], :root a[href^="http://www.duckcash.eu/"], :root a[href^="http://go.seomojo.com/tracking202/"], :root a[href^="http://www.downloadweb.org/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > .vci, :root a[href^="http://www.installads.net/"], :root div[role="navigation"] + c-wiz > div > .kxhcC, :root a[href^="http://www.download-provider.org/"], :root a[href^="http://www.down1oads.com/"], :root a[href^="https://trafficmedia.center/"], :root a[href^="http://www.dealcent.com/register.php?affid="], :root a[href^="https://gghf.mobi/"], :root a[href^="http://www.terraclicks.com/"], :root a[href^="http://www.coinducks.com/"], :root .rscontainer > .ellip, :root a[href^="http://www.clkads.com/adServe/"], :root a[href^="http://www.clickansave.net/"], :root div[class^="adpubs-"], :root a[href*="deliver.trafficfabrik.com"], :root a[href^="http://www.cash-duck.com/"], :root a[href^="http://www.bitlord.me/share/"], :root div[class^="Directory__footerAds"], :root a[href^="http://www.bet365.com/"][href*="?affiliate="], :root a[href^="http://www.bet365.com/"][href*="&affiliate="], :root a[href^="http://www.badoink.com/go.php?"], :root #mbEnd[cellspacing="0"][cellpadding="0"], :root div[data-ad-underplayer], :root a[href^="http://www.richducks.com/"], :root a[href^="http://www.babylon.com/welcome/index?affID"], :root a[href^="http://www.sexgangsters.com/?pid="], :root a[href^="http://www.amazon.co.uk/exec/obidos/external-search?"], :root a[href^="https://ads-for-free.com/click.php?"], :root a[href^="http://tracker.mybroadband.co.za/"], :root a[href^="http://www.socialsex.com/"], :root a[href^="https://www.camsoda.com/enter.php?id="], :root a[href^="http://go.ad2up.com/"], :root a[href^="https://badoinkvr.com/"], :root a[href*="/adServe/banners?"], :root a[href^="http://www.adxpansion.com"], :root .plistaList > .itemLinkPET, :root a[href^="http://www.adbrite.com/mb/commerce/purchase_form.php?"], :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root a[href^="http://www.ragazzeinvendita.com/?rcid="], :root a[href^="http://www.TwinPlan.com/AF_"], :root div[class^="adbanner_"], :root a[href^="http://www.brightwheel.info/"], :root a[href^="https://www.iclwy.xyz/"], :root a[href^="http://www.123-reg.co.uk/affiliate2.cgi"], :root div[itemtype="http://www.schema.org/WPAdBlock"], :root a[href^="http://wopertific.info/"], :root a[href^="http://bodelen.com/"], :root a[href^="http://wgpartner.com/"], :root div[class^="Ad__adContainer"], :root a[href^="http://web.adblade.com/"], :root div[class^="BlockAdvert-"], :root a[href^="https://go.onclasrv.com/"], :root a[href^="http://wct.link/"], :root a[href^="https://topoffers.com/"][href*="/?pid="], :root a[href^="http://vinfdv6b4j.com/"], :root a[href^="http://s9kkremkr0.com/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="http://us.marketgid.com"], :root a[href^="http://ul.to/ref/"], :root a[href^="http://ucam.xxx/?utm_"], :root a[href^="https://adsrv4k.com/"], :root a[href^="http://trk.mdrtrck.com/"], :root a[href^="http://traffic.tc-clicks.com/"], :root div[class^="awpcp-random-ads"], :root a[href^="http://www.graboid.com/affiliates/"], :root a[href^="http://tracking.toroadvertising.com/"], :root a[href^="http://www.liutilities.com/"], :root a[href^="http://www.dl-provider.com/search/"], :root a[href^="http://tc.tradetracker.net/"] > img, :root a[href^="http://tracking.deltamediallc.com/"], :root a[href^="http://track.adform.net/"], :root a[href^="http://tour.affbuzzads.com/"], :root a[href^="https://iac.ampxdirect.com/"], :root a[href^="http://t.mdn2015x3.com/"], :root a[href^="http://galleries.securewebsiteaccess.com/"], :root a[href^="http://stateresolver.link/"], :root a[href^="http://sharesuper.info/"], :root a[href^="https://awecrptjmp.com/"], :root a[href^="http://server.cpmstar.com/click.aspx?poolid="], :root a[href^="http://serve.williamhill.com/promoRedirect?"], :root a[href^="http://www.downloadthesefiles.com/"], :root a[href^="http://secure.cbdpure.com/aff/"], :root a[href*="/cmd.php?ad="], :root a[href^="http://refpaano.host/"], :root #\5f _mom_ad_2, :root a[href^="http://ads.sprintrade.com/"], :root a[href^="http://record.commissionking.com/"], :root div[class*="-storyBodyAd-"], :root a[href^="https://easygamepromo.com/ef/custom_affiliate/"], :root [href^="https://get-download.club/"], :root a[href^="http://record.betsafe.com/"], :root a[href^="https://keep2share.cc/pr/"], :root a[href^="https://clixtrac.com/"], :root [onclick*="content.ad/"], :root a[href^="http://adlev.neodatagroup.com/"], :root a[href^="http://reallygoodlink.extremefreegames.com/"], :root a[href^="http://promos.bwin.com/"], :root a[href*=".irtyc.com/"], :root a[href^="http://z1.zedo.com/"], :root a[href^="http://pokershibes.com/index.php?ref="], :root a[href^="http://mmo123.co/"], :root a[href^="https://www.oboom.com/ref/"], :root a[href^="http://media.paddypower.com/redirect.aspx?"], :root a[href^="http://allaptair.club/"], :root #rhs_block .xpdopen > ._OKe > div > .mod > ._yYf, :root .section-result[data-result-ad-type], :root a[href^="//ads.ad-center.com/"], :root a[href^="https://track.trkinator.com/"], :root a[href^="https://betway.com/"][href*="&a="], :root a[href^="https://affiliates.bet-at-home.com/processing/"], :root a[href^="http://dethao.com/"], :root a[href^="https://ads.ad4game.com/"], :root div[id^="ad-position-"], :root a[data-redirect^="this.href='http://paid.outbrain.com/network/redir?"], :root a[href^="http://liversely.com/"], :root a[href^="https://deliver.ptgncdn.com/"], :root a[href^="https://www.arthrozene.com/"][href*="?tid="], :root a[href^="http://feeds1.validclick.com/"], :root a[href^="http://latestdownloads.net/download.php?"], :root a[href^="http://k2s.cc/code/"], :root #topstuff > #tads, :root a[href*=".bang.com/"][href*="&aff="], :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://join3.bannedsextapes.com/track/"], :root a[href^="https://gamescarousel.com/"], :root a[href^="http://istri.it/?"], :root a[href^="//awejmp.com/"], :root a[href^="http://mob1ledev1ces.com/"], :root a[href^="http://www.fbooksluts.com/"], :root a[href^="http://www.cdjapan.co.jp/aff/click.cgi/"], :root a[href^="//api.ad-goi.com/"], :root a[href*="//ridingintractable.com/"], :root a[href^="http://intent.bingads.com/"], :root div[id^="crt-"][style], :root a[href^="http://igromir.info/"], :root a[href^="https://track.themadtrcker.com/"], :root a[href^="http://hyperlinksecure.com/go/"], :root a[href^="https://intrev.co/"], :root a[href^="http://https://www.get-express-vpn.com/offer/"], :root .ob_container .item-container-obpd, :root a[href^="http://websitedhoome.com/"], :root a[href^="http://www.adskeeper.co.uk/"], :root a[href^="https://clickadilla.com/"], :root a[href^="http://www.gfrevenge.com/landing/"], :root a[href^="http://45eijvhgj2.com/"], :root a[href^="http://hpn.houzz.com/"], :root a[href^="http://searchtabnew.com/"], :root a[href*="?adlivk="][href*="&refer="], :root a[href^="//look.djfiln.com/"], :root a[href^="http://greensmoke.com/"], :root a[href^="//5e1fcb75b6d662d.com/"], :root a[href^="http://googleads.g.doubleclick.net/pcs/click"], :root a[href^="https://bnsjb1ab1e.com/"], :root a[href^="http://mo8mwxi1.com/"], :root div[class^="ResponsiveAd-"], :root a[href^="http://install.securewebsiteaccess.com/"], :root a[href^="http://www.revenuehits.com/"], :root a[href^="https://mcdlks.com/"], :root a[href^="https://bs.serving-sys.com"], :root .__y_elastic .__y_item, :root a[href^="http://go.mobisla.com/"], :root a[href^="//srv.buysellads.com/"], :root a[href^="http://g1.v.fwmrm.net/ad/"], :root .widget-pane-section-result[data-result-ad-type], :root a[href^="http://imads.integral-marketing.com/"], :root a[href^="http://freesoftwarelive.com/"], :root a[href^="http://adtrackone.eu/"], :root a[href^="http://finaljuyu.com/"], :root a[href^="http://fileloadr.com/"], :root a[href^="https://dltags.com/"], :root a[href^="http://onclickads.net/"], :root a[href^="http://extra.bet365.com/"][href*="?affiliate="], :root a[href^="http://ethfw0370q.com/"], :root [id^="bunyad_ads_"], :root a[href^="http://elitefuckbook.com/"], :root a[href^="http://eclkmpsa.com/"], :root a[href*="//3wr110.xyz/"], :root a[href^="http://earandmarketing.com/"], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href*=".intab.fun/"], :root a[href^="http://secure.signup-way.com/"], :root [href^="https://maskip.co/"], :root a[href^="http://getlinksinaseconds.com/"], :root #content > #center > .dose > .dosesingle, :root a[href^="http://campaign.bharatmatrimony.com/track/"], :root a[href^="http://d2.zedo.com/"], :root a[href^="http://keep2share.cc/pr/"], :root a[href^="http://cp.cbbp1.com"], :root a[href^="http://contractallsticker.net/"], :root a[href^="http://codec.codecm.com/"], :root a[href^="http://pwrads.net/"], :root a[href^="//oardilin.com/"], :root a[href^="http://refer.webhostingbuzz.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="http://www.downloadplayer1.com/"], :root a[href^="http://clicks.binarypromos.com/"], :root iframe[name^="google_ads_iframe"], :root div[class^="largeRectangleAd_"], :root a[href^="https://dediseedbox.com/clients/aff.php?"], :root a[href^="http://www.wantstraffic.com/"], :root a[href^="http://databass.info/"], :root a[href^="http://www.urmediazone.com/signup"], :root a[href^="http://click.plista.com/pets"], :root a[href^="https://a.bestcontentpc.top/"], :root a[href^="http://chaturbate.com/affiliates/"], :root a[href^="http://www.firstload.com/affiliate/"], :root a[href^="http://www.friendlyadvertisements.com/"], :root a[href^="//00ae8b5a9c1d597.com/"], :root a[href^="http://cdn3.adbrau.com/"], :root a[href^="http://get.slickvpn.com/"], :root a[href^="http://amzn.to/"] > img[src^="data"], :root a[href^="http://bs.serving-sys.com/"], :root a[href^="http://cpaway.afftrack.com/"], :root a[href^="http://cdn.adsrvmedia.net/"], :root [lazy-ad="top_banner"], :root a[href^="http://360ads.go2cloud.org/"], :root a[href^="http://dftrck.com/"], :root a[href^="http://casino-x.com/?partner"], :root div[data-flt-ve="sponsored_search_ads"], :root a[href^="http://record.sportsbetaffiliates.com.au/"], :root a[href^="http://campeeks.com/"][href*="&utm_"], :root #flowplayer > div[style="position: absolute; width: 300px; height: 275px; left: 222.5px; top: 85px; z-index: 999;"], :root a[href^="http://download-performance.com/"], :root a[href^="http://www.on2url.com/app/adtrack.asp"], :root #\5f _nq__hh[style="display:block!important"], :root a[href^="http://guideways.info/"], :root a[href^="http://campaign.bharatmatrimony.com/cbstrack/"], :root a[href^="http://ads.expekt.com/affiliates/"], :root a[href^="http://callville.xyz/"], :root a[href^="http://xads.zedo.com/"], :root a[href^="http://www.affiliates1128.com/processing/"], :root a[href^="http://c.jumia.io/"], :root a[href^="https://bullads.net/get/"], :root a[href^="http://yads.zedo.com/"], :root a[href^="http://down1oads.com/"], :root a[href^="http://buysellads.com/"], :root a[href^="https://uncensored.game/"], :root td[valign="top"] > .mainmenu[style="padding:10px 0 0 0 !important;"], :root a[href^="http://feedads.g.doubleclick.net/"], :root a[href^="http://betahit.click/"], :root a[href^="https://torguard.net/aff.php"] > img, :root a[href^="http://bestorican.com/"], :root a[href^="http://bcp.crwdcntrl.net/"], :root a[href^="http://bc.vc/?r="], :root a[href^="http://banners.victor.com/processing/"], :root a[href^="http://adf.ly/?id="], :root a[href^="https://uncensored3d.com/"], :root div[data-subscript="Advertising"], :root a[href^="http://t.mdn2015x2.com/"], :root div[class$="dealnews"] > .dealnews, :root a[href^="http://click.payserve.com/"], :root a[href^="http://s5prou7ulr.com/"], :root a[href^="http://azmobilestore.co/"], :root a[href^="http://affiliate.glbtracker.com/"], :root a[href^="https://transfer.xe.com/signup/track/redirect?"], :root a[href^="http://anonymous-net.com/"], :root a[href^="https://www.dsct1.com/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root .icons-rss-feed + .icons-rss-feed div[class$="_item"], :root a[href^="http://aflrm.com/"], :root a[href^="http://affiliates.pinnaclesports.com/processing/"], :root a[href^="http://partner.sbaffiliates.com/"], :root a[href^="http://affiliate.coral.co.uk/processing/"], :root a[href^="http://aff.ironsocket.com/"], :root a[href^="http://adsrv.keycaptcha.com"], :root a[href^="https://zononi.com/"], :root a[href^="http://adserving.unibet.com/"], :root a[href^="https://secure.adnxs.com/clktrb?"], :root a[href^="http://adserver.adtechus.com/"], :root a[href^="http://adserver.adreactor.com/"], :root a[href^="http://www.yourfuckbook.com/?"], :root a[href^="//go.onclasrv.com/"], :root .GHOFUQ5BG2 > .GHOFUQ5BF2 > .GHOFUQ5BG5, :root a[href^="https://www.mrskin.com/tour"], :root a[href^="http://adserver.adtech.de/"], :root a[href^="http://cwcams.com/landing/click/"], :root a[href^="http://ads.betfair.com/redirect.aspx?"], :root a[href^="http://ads.affbuzzads.com/"], :root a[href^="//mob1ledev1ces.com/"], :root a[href^="http://online.ladbrokes.com/promoRedirect?"], :root a[href^="http://go.trafficshop.com/"], :root a[href^="http://ads.ad-center.com/"], :root a[href^="https://horny-pussies.com/tds"], :root a[href^="http://adfarm.mediaplex.com/"], :root a[href^="http://ad.doubleclick.net/"], :root a[href^="https://k2s.cc/pr/"], :root a[href^="http://ad.au.doubleclick.net/"], :root a[href^="http://a63t9o1azf.com/"], :root a[href^="http://srvpub.com/"], :root a[href^="http://a.adquantix.com/"], :root a[href^="http://NowDownloadAll.com"], :root a[href^="http://adtrack123.pl/"], :root a[href^="http://9amq5z4y1y.com/"], :root a[href^="http://4c7og3qcob.com/"], :root a[href^="//go.vedohd.org/"], :root a[href^="http://www.ducksnetwork.com/"], :root a[href^="http://3wr110.net/"], :root a[href^="http://1phads.com/"], :root a[href^="//zenhppyad.com/"], :root #mn div[style="position:relative"] > #center_col > div > ._dPg, :root a[href^="http://www.myvpn.pro/"], :root a[href^="//www.pd-news.com/"], :root a[href^="//www.mgid.com/"], :root a[href^="http://lp.ncdownloader.com/"], :root a[href^="//pubads.g.doubleclick.net/"], :root div[id^="ad-gpt-"], :root a[href^="http://pan.adraccoon.com?"], :root a[href^="https://ilovemyfreedoms.com/"][href*="?affiliate_id="], :root a[href^="//healthaffiliate.center/"], :root .l-container > #fishtank, :root [id*="ScriptRoot"], :root a[href^="http://deloplen.com/afu.php?zoneid="], :root a[href^="//db52cc91beabf7e8.com/"], :root div[data-crl="true"][data-id^="CarouselPLA-"], :root .plistaList > .plista_widget_underArticle_item[data-type="pet"], :root #center_col > #taw > #tvcap > .commercial-unit-desktop-top, :root a[href^="http://www.afgr2.com/"], :root #mn div[style="position:relative"] > #center_col > ._Ak, :root a[href^="https://www.oboom.com/ad/"], :root a[href^="//4f6b2af479d337cf.com/"], :root a[href^="https://awejmp.com/"], :root a[href^=" http://www.sex.com/"][href*="&utm_"], :root a[href^=" http://n47adshostnet.com/"], :root a[href^=" http://ads.ad-center.com/"], :root a[href^="https://fileboom.me/pr/"], :root a[href^="http://marketgid.com"], :root .GPMV2XEDA2 > .GPMV2XEDP1 > .GPMV2XEDJBB, :root a[href*="onclkds."], :root .trc_rbox_div .syndicatedItem, :root #ads > .dose > .dosesingle, :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > div > .vci, :root a[href*="delivery.trafficfabrik.com"], :root a[href^="http://connectlinking6.com/"], :root a[href^="http://cdn3.adexprts.com/"], :root a[href^="https://spygasm.com/track?"], :root a[href*="=exoclick"], :root div[class^="backfill-taboola-home-slot-"], :root a[href*="=adscript"], :root #mn #center_col > div > h2.spon:first-child, :root a[href*="//bongacams5.com/track?"], :root FBS-AD, :root a[href*="5iclx7wa4q.com"], :root a[href^="https://www.adxtro.com/"], :root #center_col > #resultStats + #tads + #res + #tads, :root a[href*="//bongacams2.com/track?"], :root a[href^="http://www.drowle.com/"], :root a[href*=".udncoeln.com/"], :root a[href*=".qertewrt.com/"], :root a[target="_blank"][href^="http://api.taboola.com/"], :root a[href*=".smartadserver.com"], :root a[href^="http://track.incognitovpn.com/"], :root a[href*="//bongacams.com/track?"], :root a[data-oburl^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://refpa.top/"], :root a[href*=".revimedia.com/"], :root .__ywvr .__y_item, :root a[href^="https://farm.plista.com/pets"], :root a[href*=".red90121.com/"], :root [href^="http://advertisesimple.info/"], :root a[href^="https://www.friendlyduck.com/AF_"], :root #center_col > #resultStats + div + #res + #tads, :root a[href^="//40ceexln7929.com/"], :root a[href^="https://playuhd.host/"], :root .mw > #rcnt > #center_col > #taw > #tvcap > .c, :root a[href*=".purple6401.com/"], :root a[href^="http://www.greenmangaming.com/?tap_a="], :root a[href*=".opskln.com/"], :root div[id^="div_ad_stack_"], :root a[href*=".ichlnk.com/"], :root a[href^="http://secure.hostgator.com/~affiliat/"], :root [onclick^="window.open('http://adultfriendfinder.com/search/"], :root .mod > .gws-local-promotions__border, :root a[href^="https://deliver.tf2www.com/"], :root a[href^="http://spygasm.com/track?"], :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root a[href*=".adk2x.com/"], :root a[href^="http://data.committeemenencyclopedicrepertory.info/"], :root a[href*=".allsports4you.club"], :root #MAIN.ShowTopic > .ad, :root a[href^="https://porngames.adult/?SID="], :root a[href^="http://findersocket.com/"], :root ad-slot--header-banner, :root a[href^="https://m.do.co/c/"] > img, :root #tads + div + .c, :root a[href^="//jsmptjmp.com/"], :root #ssmiwdiv[jsdisplay], :root a[href*=".adform.net/"], :root a[href^="http://duckcash.eu/"], :root a[href^="http://www.mobileandinternetadvertising.com/"], :root .GB3L-QEDGY .GB3L-QEDF- > .GB3L-QEDE-, :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root a[href^="http://liversely.net/"], :root .ra[width="30%"][align="right"] + table[width="70%"][cellpadding="0"], :root a[href^="http://www.coiwqe.site/"], :root iframe[id^="google_ads_frame"], :root a[href^="http://www.bluehost.com/track/"] > img, :root a[data-url^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://play4k.co/"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root a[href^="http://n.admagnet.net/"], :root a[href^="http://bestchickshere.com/"], :root a[href^="http://www.streamtunerhd.com/signup?"], :root a[href^="http://www.getyourguide.com/?partner_id="], :root [onclick^="window.open('https://www.brazzersnetwork.com/landing/"], :root a[href*=".adsrv.eacdn.com/"] > img, :root a[href^="http://mgid.com/"], :root a[href*="a2g-secure.com"], :root #resultspanel > #topads, :root a[href^="http://espn.zlbu.net/"], :root a[href^="https://vod09197d7.club/"], :root a[href^="http://k2s.cc/pr/"], :root a[href^="http://9nl.es/"], :root #assetsListings[style="display: block;"], :root [onclick^="window.open('window.open('//delivery.trafficfabrik.com/"], :root a[href^="http://adrunnr.com/"], :root [id*="MarketGid"], :root a[href^="https://servedbyadbutler.com/"], :root a[href^="https://mob1ledev1ces.com/"], :root [id^="adframe_wrap_"], :root div[data-mediatype="advertising"], :root a[href^="http://c.ketads.com/"], :root a[href^="http://6kup12tgxx.com/"], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root a[href*=".fwd28.com/"], :root [lazy-ad="leftbottom_banner"], :root p[id^="div-gpt-ad-"], :root a[href^="http://fsoft4down.com/"], :root a[href*="ad2upapp.com/"], :root a[href^="http://see-work.info/"], :root a[href*="/adrotate-out.php?"], :root #atvcap + #tvcap > .mnr-c > .commercial-unit-mobile-top, :root .inlineNewsletterSubscription + .inlineNewsletterSubscription div[class$="_item"], :root a[href*=".orange2258.com/"], :root #taw > .med + div > #tvcap > .mnr-c:not(.qs-ic) > .commercial-unit-mobile-top, :root .plista_widget_belowArticleRelaunch_item[data-type="pet"], :root a[href^="http://www.fonts.com/BannerScript/"], :root [href^="http://www.xiloy.site/"], :root a[href^="https://www.passeura.com/"], :root a[href^="http://www.pinkvisualpad.com/?revid="], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root #cnt #center_col > #taw > #tvcap > .c._oc._Lp, :root [href*="//xml.revrtb.com/"], :root a[href^="http://hd-plugins.com/download/"], :root a[href^="//voyeurhit.com/cs/"], :root a[href^="http://www.afgr3.com/"], :root [ad-id^="googlead"], :root a[href^="http://b.bestcompleteusa.info/"], :root .trc_rbox_div .syndicatedItemUB, :root .ra[align="left"][width="30%"], :root a[href^="https://trackjs.com/?utm_source"], :root AFS-AD, :root a[href^="http://adclick.g.doubleclick.net/"], :root #main-content > [style="padding:10px 0 0 0 !important;"], :root #center_col > #resultStats + div[style="border:1px solid #dedede;margin-bottom:11px;padding:5px 7px 5px 6px"], :root div[class^="lifeOnwerAd"], :root a[href$="/vghd.shtml"], :root a[href^="https://redirect.ero-advertising.com/"], :root #center_col > #main > .dfrd > .mnr-c > .c._oc._zs, :root a[href*=".clksite.com/"], :root a[href^="http://www.webtrackerplus.com/"], :root .GJJKPX2N1 > .GJJKPX2M1 > .GJJKPX2P4, :root #center_col > #taw > #tvcap > .cu-container > .commercial-unit-desktop-top, :root a[href^="http://centertrust.xyz/"], :root .vi-lb-placeholder[title="ADVERTISEMENT"], :root a[href^="http://goldmoney.com/?gmrefcode="], :root a[href^="http://papi.mynativeplatform.com:80/pub2/"], :root LEADERBOARD-AD, :root #mn #center_col > div > h2.spon:first-child + ol:last-child, :root a[href^="http://servicegetbook.net/"], :root #rhs_block > #mbEnd, :root a[href^="http://cinema.friendscout24.de?"], :root [lazy-ad="lefttop_banner"], :root a[href^="http://www.mrskin.com/tour"], :root .jobs-information-call-to-action + .jobs-information-call-to-action div[class$="_item"], :root a[href^="https://www.incredimail.com/?id"], :root a[href^="http://api.content.ad/"], :root a[href^="http://adtransfer.net/"], :root a[href*=".clkcln.com/"], :root .commercial-unit-desktop-rhs > .iKidV > .Ee92ae + .P2mpm + .hp3sk, :root a[href^="http://www.uniblue.com/cm/"], :root a[href^="http://landingpagegenius.com/"], :root a[data-redirect^="http://click.plista.com/pets"], :root #rhs_block > script + .c._oc._Ve.rhsvw, :root #\5f _mom_ad_12, :root .__zinit .__y_item, :root .ch[onclick="ga(this,event)"], :root .__ywl .__y_item, :root a[href^="http://track.trkvluum.com/"], :root a[href^="http://linksnappy.com/?ref="], :root [src^="/Redirect.a2b?"], :root a[href^="http://www.torntvdl.com/"], :root #center_col > #resultStats + #tads, :root .__yinit .__y_item, :root #center_col > div[style="font-size:14px;margin-right:0;min-height:5px"] > div[style="font-size:14px;margin:0 4px;padding:1px 5px;background:#fff8e7"], :root a[href^="http://track.affiliatenetwork.co.za/"], :root a[data-redirect^="http://paid.outbrain.com/network/redir?"], :root a[href^="https://secure.cbdpure.com/aff/"], :root AMP-AD, :root iframe[src*="mellowads.com"], :root .__y_inner > .__y_item, :root #cnt #center_col > #res > #topstuff > .ts, :root a[href^="https://landing.brazzersnetwork.com/"], :root .rc-cta[data-target], :root a[href*="//promo-bc.com/track?"], :root a[href^="http://www.firstclass-download.com/"], :root a[href*=".trust.zone"], :root a[href*="googleme.eu"], :root .GFYY1SVD2 > .GFYY1SVC2 > .GFYY1SVF5, :root div[class^="AdEmbeded__AddWrapper"], :root a[href^="http://affiliates.score-affiliates.com/"], :root #rhswrapper > #rhssection[border="0"][bgcolor="#ffffff"], :root .Mpopup + #Mad > #MadZone, :root #center_col > #\5f Emc, :root #rhs_block .mod > .luhb-div > div[data-async-type="updateHotelBookingModule"], :root div[class^="advertisement-desktop"], :root a[href^="http://ads2.williamhill.com/redirect.aspx?"], :root a[href^="https://www.spyoff.com/"], :root AD-TRIPLE-BOX, :root a[href^="http://www.menaon.com/installs/"], :root a[href^="http://taboola-"][href*="/redirect.php?app.type="], :root .mw > #rcnt > #center_col > #taw > .c, :root #rhs_block > .ts[cellspacing="0"][cellpadding="0"][style="padding:0"], :root a[href^="http://clickandjoinyourgirl.com/"], :root a[href^="https://ad13.adfarm1.adition.com/"], :root #header + #content > #left > #rlblock_left, :root a[href^="http://www.seekbang.com/cs/"], :root a[href^="http://syndication.exoclick.com/"], :root a[href^="http://bluehost.com/track/"], :root a[href^="https://squren.com/rotator/?atomid="], :root .nrelate .nr_partner, :root a[href^="//medleyads.com/spot/"], :root a[href*="mfroute.com/"], :root a[href^="//z6naousb.com/"], :root a[href^="http://t.mdn2015x1.com/"], :root div[id^="ad_bigbox_"], :root #content > #right > .dose > .dosesingle, :root #rhs_block > ol > .rhsvw > .kp-blk > .xpdopen > ._OKe > ol > ._DJe > .luhb-div, :root a[href^="http://tezfiles.com/pr/"], :root a[href^="http://t.wowtrk.com/"], :root div[id^="adspot-"], :root #\5f _admvnlb_modal_container, :root #center_col > #taw > #tvcap > .rscontainer, :root div[id^="drudge-column-ads-"], :root a[href^="http://tour.mrskin.com/"], :root #main_col > #center_col div[style="font-size:14px;margin:0 4px;padding:1px 5px;background:#fff7ed"], :root a[href^="https://track.totalav.com/"], :root a[href^="https://is.ltroute.com/"], :root a[href^="http://www.incredimail.com/?id"], :root a[href^="http://ad-apac.doubleclick.net/"], :root a[data-nvp*="'trafficUrl':'https://paid.outbrain.com/network/redir?"], :root a[href^="http://webtrackerplus.com/"], :root div[itemtype="http://schema.org/WPAdBlock"], :root a[href^="https://www.nudeidols.com/cams/"], :root #center_col > #res > #topstuff + #search > div > #ires > #rso > #flun, :root a[href^="http://www.sex.com/pics/?utm_"], :root a[href^="http://vo2.qrlsx.com/"], :root a[href^="http://engine.newsmaxfeednetwork.com/"], :root a[href^="http://ad.yieldmanager.com/"], :root a[href^="http://www.plus500.com/?id="], :root #flowplayer > div[style="z-index: 208; position: absolute; width: 300px; height: 275px; left: 222.5px; top: 85px;"], :root a[href^="http://n217adserv.com/"], :root a[href^="//4c7og3qcob.com/"] { display: none !important; }
		</style>
{{--	replace--}}
		<link rel="icon" type="image/png" sizes="56x56"href="{{asset('assets/frontends/images/fav-icon/icon.png')}}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css"href="{{asset('assets/frontends/css/style.css')}}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css"href="{{asset('assets/frontends/css/responsive.css')}}">
		<!-- Theme-Color css -->
		<link rel="stylesheet" id="jssDefault"href="{{asset('assets/frontends/css/color.css')}}">
		<!-- Custom css -->
		<link rel="stylesheet" id="jssDefault"href="{{asset('assets/frontends/css/custom.css')}}">
		<!-- Boostrap css-->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/frontends/vendor/boostrap/css/boostrap.min.css')}}">
		<style type="text/css">
			.service-style-two .single-block .img-box img {
				width: 366px;
				height: 265px;
			}
		</style>
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
<!-- 			<div id="loader-wrapper">
				<div id="loader"></div>
			</div> -->

			<!-- ==================== Style Switcher ==================== -->
			<div class="switcher">
				<!-- Switcher button -->
				<div class="switch-btn">
					<button><i class="fa fa-cog fa-spin"></i></button>
				</div>

				<!-- switcher body -->
				<div class="switch-menu">
					<h5 class="title">Style Switcher</h5>
					<!-- Theme color changer -->
					<div class="switcher-container">
						<h5>Color Skins</h5>
						<ul id="styleOptions" title="Switch Color" class="clearfix">
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color" class="color1"></a></li>
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color-2" class="color2"></a></li>
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color-3" class="color3"></a></li>
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color-4" class="color4"></a></li>
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color-5" class="color5"></a></li>
						</ul>
					</div>
				</div> <!-- /switch-menu -->
			</div> <!-- /.switcher -->



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<header class="theme-main-header theme-header-two">
				<div class="top-header bg-color">
					<div class="container clearfix">
						<p class="float-left email-us">Địa chỉ email của chúng tôi : <a href="{{asset('assets/frontends/mailto:veaportal@vea.gov.vn')}}">veaportal@vea.gov.vn</a></p>
						<p class="float-right call-us">Hãy liên hệ với chúng tôi khi bạn cần : <a href="{{asset('assets/frontends/tel:(024) 38223189')}}">(024) 38223189</a></p>
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="middle-header">
					<div class="container clearfix">
						<!-- ================= Logo ==================== -->
						<div class="logo"><a href="{{Route('home')}}"><img src="{{asset('assets/frontends/images/Edit/logo-2.png')}}" alt="logo"></a></div>

						<ul class="our-address clearfix">
							<li>
								<i class="icon flaticon-map"></i>
								<p>Số 10, Tôn Thất Thuyết, Phường Mỹ Đình, <br>Quận Nam Từ Liêm, <span>Hà Nội</span> </p>
							</li>
							<li>
								<i class="icon flaticon-clock"></i>
								<p>Thứ Hai - Thứ Sáu  <br><span> 8.00 - 17.00 </span></p>
							</li>
							<li>
								<i class="icon flaticon-phone-call"></i>
								<p><a href="{{asset('assets/frontends/#')}}">(024) 38223189</a> <br><span>Gọi ngay</span></p>
							</li>
						</ul>
					</div>
				</div> <!-- /.middle-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="inner-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class="active"><a href="{{Route('home')}}">Trang chủ</a>
									    </li>
									    <li><a href="#" style="padding-right: 20px;">Tin tức</a>
									    	<ul class="dropdown">
									    		<li><a href="{{Route('nghi_quyet_chi_thi')}}">Nghị quyết, chỉ thị</a></li>
									    		<li><a href="{{Route('chien_luoc_quy_hoach')}}">Chiến lược, kế hoạch</a></li>
									    		<li><a href="{{Route('van_ban_quy_pham_phap_luat')}}">Văn bản quy phạm pháp luật</a></li>
									    		<li><a href="{{Route('dieu_uoc_quoc_te')}}">Điều ước quốc tế</a></li>
									    		<li><a href="{{Route('chuong_trinh_de_an_du_an')}}">Chương trình, đề án, dự án</a></li>
									       </ul>
									    </li>
									    <li><a href="{{asset('assets/frontends/#')}}" style="padding-right: 20px;">Hoạt động tiêu biểu</a>
									    	<ul class="dropdown">
									    		<li><a href="{{Route('danh_gia_tac_dong_moi_truong')}}">Đánh giá tác động MT</a></li>
									    		<li><a href="{{Route('giay_phep_moi_truong')}}">Giấy phép môi trường</a></li>
									    		<li><a href="{{Route('giam_sat_thanh_tra_kiem_tra')}}">Giam sát, thanh tra, kiểm tra</a></li>
									    		<li><a href="{{Route('quan_trac_moi_truong')}}">Quan trắc môi trường</a></li>
									    		<li><a href="{{Route('truyen_thong_nang_cao_nhan_thuc')}}">Truyền thông</a></li>
									    		<li><a href="{{Route('thong_tin_du_lieu_bao_cao_moi_truong')}}">TT, DL và báo cáo môi trường</a></li>
									    		<li><a href="{{Route('khoa_hoc_cong_nghe_va_hop_tac_quoc_te')}}">KHCN và hợp tác quốc tế</a></li>
									       </ul>
									    </li>
									    <li><a href="{{asset('assets/frontends/#')}}" style="padding-right: 20px;">Tài liệu</a>
									    	<ul class="dropdown">
									    		<li><a href="{{Route('Luat')}}">Luật</a></li>
									    		<li><a href="{{Route('Nghi_dinh')}}">Nghị định</a></li>
									    		<li><a href="{{Route('Thong_tu')}}">Thông tư</a></li>
									    		<li><a href="{{Route('Quy_chuan')}}">Quy chuẩn</a></li>
									    		<li><a href="{{Route('Van_ban_khac')}}">Văn bản khác</a></li>
									       </ul>
									    </li>
									   <li><a href="{{asset('assets/frontends/#')}}" style="padding-right: 20px;">Giới thiệu</a>
										   <ul class="dropdown">
											   <li><a href="{{Route('lanh_dao_tong_cuc')}}">Lãnh đạo tổng cục</a></li>
											   <li><a href="{{Route('chuc_nang_nhiem_vu')}}">Chức năng nhiệm vụ</a></li>
											   <li><a href="{{Route('so_do_to_chuc')}}">Sơ đồ tổ chức</a></li>
											   <li><a href="{{Route('cac_don_vi_truc_thuoc')}}">Các đơn vị trực thuộc</a></li>
										   </ul>
									   </li>
									   <li><a href="#">Về chúng tôi</a></li>
									   <li><a href="{{Route('lien_he')}}">Liên hệ</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<ul class="social-icon float-right">
					   			{{--<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-search" aria-hidden="true"></i></a></li>--}}
								<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
							</ul>
						</div> <!-- /.inner-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.theme-main-header -->

			@yield('content-homepage')


<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-two">
				<div class="main-footer-widget">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-sm-6 about-widget">
								<div class="logo">
									<a href="{{asset('assets/frontends/index.html')}}">
										<img src="{{asset('assets/frontends/images/Edit/logo-2.png')}}" alt="logo">
									</a></div>
								<p>10, Tôn Thất Thuyết, Phường Mỹ Đình, Quận Nam Từ Liêm <span> Hà Nội</span> </p>
								<ul class="social-icon">
									<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.about-widget -->

							<div class="col-lg-2 col-sm-6 list-widget">
								<h6 class="title">Liên kết</h6>
								<ul>
									<li><a href="{{asset('assets/frontends/index.html')}}">Trang chủ</a></li>
									<li><a href="{{asset('assets/frontends/about.html')}}">Giới thiệu</a></li>
									<li><a href="{{asset('assets/frontends/service-v1.html')}}">Tin tức</a></li>
									<li><a href="{{asset('assets/frontends/blog-classic.html')}}">Dịch vụ</a></li>
									<li><a href="{{asset('assets/frontends/project-grid.html')}}">Tài liệu</a></li>
								</ul>
							</div> <!-- /.list-widget -->

							<div class="col-lg-4 col-sm-6 twitter-widget">
								<h6 class="title">Liên hệ</h6>
								<ul>
									<li class="clearfix" style="padding: 0px">
										Cơ quan chủ quản: Tổng cục Môi trường
										Giấy phép số 153/GP-TTGT do Bộ Thông tin và Truyền thông cấp ngày 26 tháng 10 năm 2015
										Người chịu trách nhiệm chính: TS. Nguyễn Văn Tài – Tổng cục trưởng Tổng cục Môi trường
									</li>
								</ul>
							</div> <!-- /.twitter-widget -->

							<div class="col-lg-3 col-sm-6 subscribe-widget">
								<h6 class="title">Nhận tin tức</h6>
								<form action="#">
									<input type="email" placeholder="Địa chỉ email">
									<button><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								</form>
							</div> <!-- /.subscribe-widget -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.main-footer-widget -->
			</footer> <!-- /.theme-footer -->




	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>



			<div class="modal fade" id="schedule-box" tabindex="-1" role="dialog">
			  <div class="modal-dialog container" role="document">
			    <div class="modal-content">
			    	<div class="appoinment_form_wrapper clear_fix">
			    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
			    		<form action="#">
			    			<h2 class="title">Make an Appointment.</h2>
							<div class="row">
								<div class="col-lg-6"><input type="text" placeholder="Name"></div>
								<div class="col-lg-6"><input type="email" placeholder="Email"></div>
								<div class="col-lg-6"><input type="text" class="datepicker" placeholder="Date"></div>
								<div class="col-lg-6"><input type="text" class="timepicker" placeholder="Time"></div>
								<div class="col-12">
									<select class="form-control" id="exampleSelect1">
									    <option>I would like to discuss</option>
									    <option>Business Services</option>
									    <option>Consumer Product</option>
									    <option>Financial Services</option>
									    <option>Software Research</option>
									</select>
								</div>
								<div class="col-12"><textarea placeholder="Your Words"></textarea></div>
							</div>
							<button class="theme-button-one">Submit</button>
						</form>
			    	</div> <!-- End of .appoinment_form_wrapper -->
			    </div> <!-- End of .modal-content -->
			  </div> <!-- End of .modal-dialog -->
			</div> <!-- End of #schedule-box -->



		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{asset('assets/frontends/vendor/jquery.2.2.3.min.js')}}"></script>
		<!-- Popper js -->
		<script src="{{asset('assets/frontends/vendor/popper.js/popper.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('assets/frontends/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- Style-switcher  -->
		<script src="{{asset('assets/frontends/vendor/jQuery.style.switcher.min.js')}}"></script>
		<!-- Camera Slider -->
		<script src="{{asset('assets/frontends/vendor/Camera-master/scripts/jquery.mobile.customized.min.js')}}"></script>
	    <script src="{{asset('assets/frontends/vendor/Camera-master/scripts/jquery.easing.1.3.js')}}"></script>
	    <script src="{{asset('assets/frontends/vendor/Camera-master/scripts/camera.min.js')}}"></script>
	    <!-- menu  -->
		<script src="{{asset('assets/frontends/vendor/menu/src/js/jquery.slimmenu.js')}}"></script>
		<!-- WOW js -->
		<script src="{{asset('assets/frontends/vendor/WOW-master/dist/wow.min.js')}}"></script>
		<!-- owl.carousel -->
		<script src="{{asset('assets/frontends/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
		<!-- js count to -->
		<script src="{{asset('assets/frontends/vendor/jquery.appear.js')}}"></script>
		<script src="{{asset('assets/frontends/vendor/jquery.countTo.js')}}"></script>
		<!-- Fancybox -->
		<script src="{{asset('assets/frontends/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
		<!-- Calendar js -->
		<script type="text/javascript" src="{{asset('assets/frontends/vendor/monthly-master/js/monthly.js')}}"></script>
		<!-- Time picker -->
		<script type="text/javascript" src="{{asset('assets/frontends/vendor/time-picker/jquery.timepicker.min.js')}}"></script>
		<!-- ui js -->
		<script type="text/javascript" src="{{asset('assets/frontends/vendor/jquery-ui/jquery-ui.min.js')}}"></script>

		<!-- Theme js -->
		<script src="{{asset('assets/frontends/js/theme.js')}}"></script>


{{--			<script src="{{asset('files/jquery-1.9.1.min.js')}}"></script>--}}
{{--			<script src="{{asset('files/bootstrap.min.js')}}"></script>--}}
{{--			<script src="{{asset('files/pace.min.js')}}"></script>--}}
{{--			<script src="{{asset('files/all.js')}}"></script>--}}
{{--			<!-- ================== END BASE JS ================== -->--}}

{{--			<script src="{{asset('files/amcharts.js')}}"></script>--}}
{{--			<script src="{{asset('files/serial.js')}}"></script>--}}
{{--			<script src="{{asset('files/export.min.js')}}"></script>--}}
{{--			<link rel="stylesheet" type="text/css" media="all" href="{{asset('files/files/export.css')}}">--}}
{{--			<script src="{{asset('files/light.js')}}"></script>--}}
{{--			<script src="{{asset('files/ol.js')}}"></script>--}}
{{--			<script src="{{asset('files/jquery.timeago.js')}}"></script>--}}
{{--			<script src="{{asset('files/jquery.timeago.vi.js')}}"></script>--}}
{{--			<script src="{{asset('files/chosen.jquery.min.js')}}"></script>--}}
{{--			<script src="{{asset('files/jquery.slimscroll.min.js')}}"></script>--}}
			<script>
				var site_id = 14;
				function loadHourlyStat(indicator){
					$.ajax({
						url:'/public/dailystat/' + indicator + '?site_id='+site_id,
						success:function(response){
							if(response.length == 0){
								$("#indicatorStat" + indicator).hide();
								return;
							}
							else{

								__chart2 = AmCharts.makeChart("indicatorStat" + indicator, {
									"type": "serial",
									"categoryField": "time",
									"dataDateFormat": "YYYY-MM-DD HH",
									"startDuration": 1,
									"categoryAxis": {
										"labelRotation": 15,
										//"minPeriod" : "HH",
									},
									"chartCursor": {
										"enabled": true
									},
									"chartScrollbar": {
										"enabled": true
									},
									"trendLines": [],
									"graphs": [
										{
											"id": "g" + indicator,
											"balloon":{
												"drop":true,
												"adjustBorderColor":false,
												"color":"#ffffff"
											},
											"bullet": "round",
											"bulletBorderAlpha": 1,
											"bulletColor": "#FFFFFF",
											"bulletSize": 1,
											"hideBulletsCount": 50,
											"lineThickness": 2,
											"title": "red line",
											"useLineColorForBulletBorder": true,
											"valueField": "value",
											"balloonText": "<span style='font-size:12px;'>[[value]]</span>"
										}
									],
									"guides": [],
									"valueAxes": [
										{
											"title": `Nồng độ ${indicator}`
										}
									],
									"allLabels": [],
									"balloon": {},
									/*"titles": [
                                        {
                                            "id": "Title-1",
                                            "size": 15,
                                            "text": "Chỉ số "+indicator
                                        }
                                    ],*/

									"dataProvider": response
								});
							}
						}
					})
				}
				$(function(){

					var indicators = ['NO2','SO2','CO','PM2.5','PM10','O3'];
					if(site_id != 14 && site_id != 15){
						indicators = ['NO2','CO','PM2.5','PM10'];
						$('#indicatorStatSO2').css('height',0);
						$('#indicatorStatO3').css('height',0);
					}
					$(indicators).each(function(i,val){
						loadHourlyStat(val);
					})
					var lat = 21.02;
					var long = 105.8;
					initMap(12,lat,long);

					updateAQIColor();
					$('.aqiText').css('height',$('.dailyAQI').css('height'));

				})

			</script>

			<script>
				$(function(){
					$('.btnCopyLink').click(function(){
						let button = $(this)
						const el = document.createElement('textarea');
						el.value = $(this).data('link');
						el.setAttribute('readonly', '');
						el.style.position = 'absolute';
						el.style.left = '-9999px';
						document.body.appendChild(el);
						el.select();
						document.execCommand('copy');
						document.body.removeChild(el);
						$(this).text('Đã copy')
						setTimeout(function(){
							$(button).text('Copy link')
						},3000)
					})
				})
			</script>
			<script src="{{asset('assets/frontends/vendor/jquery.2.2.3.min.js')}}"></script>
			<!-- Popper js -->
			<script src="{{asset('assets/frontends/vendor/popper.js/popper.min.js')}}"></script>
			<!-- Bootstrap JS -->
			<script src="{{asset('assets/frontends/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
			<!-- Style-switcher  -->
			<script src="{{asset('assets/frontends/vendor/jQuery.style.switcher.min.js')}}"></script>
			<!-- Camera Slider -->
			<script src="{{asset('assets/frontends/vendor/Camera-master/scripts/jquery.mobile.customized.min.js')}}"></script>
			<script src="{{asset('assets/frontends/vendor/Camera-master/scripts/jquery.easing.1.3.js')}}"></script>
			<script src="{{asset('assets/frontends/vendor/Camera-master/scripts/camera.min.js')}}"></script>
			<!-- menu  -->
			<script src="{{asset('assets/frontends/vendor/menu/src/js/jquery.slimmenu.js')}}"></script>
			<!-- WOW js -->
			<script src="{{asset('assets/frontends/vendor/WOW-master/dist/wow.min.js')}}"></script>
			<!-- owl.carousel -->
			<script src="{{asset('assets/frontends/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
			<!-- js count to -->
			<script src="{{asset('assets/frontends/vendor/jquery.appear.js')}}"></script>
			<script src="{{asset('assets/frontends/vendor/jquery.countTo.js')}}"></script>
			<!-- Fancybox -->
			<script src="{{asset('assets/frontends/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
			<!-- Calendar js -->
			<script type="text/javascript" src="{{asset('assets/frontends/vendor/monthly-master/js/monthly.js')}}"></script>
			<!-- Time picker -->
			<script type="text/javascript" src="{{asset('assets/frontends/vendor/time-picker/jquery.timepicker.min.js')}}"></script>
			<!-- ui js -->
			<script type="text/javascript" src="{{asset('assets/frontends/vendor/jquery-ui/jquery-ui.min.js')}}"></script>

			<!-- Theme js -->
			<script src="{{asset('assets/frontends/js/theme.js')}}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
