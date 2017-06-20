import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "aw-layout-sidebar": {
        "backgroundColor": "#f6f6f6",
        "position": "fixed",
        "left": 0,
        "top": 0,
        "bottom": 0,
        "zIndex": 1000,
        "height": "100%",
        "paddingTop": 54,
        "marginLeft": -211,
        "borderRight": "1px solid",
        "borderRightColor": "transparent",
        "overflowX": "hidden",
        "transition": "all .5s"
    },
    "aw-layout-simple-page": {
        "backgroundColor": "#f6f6f6"
    },
    "aw-search-modal__controls i": {
        "pointerEvents": "auto",
        "cursor": "pointer"
    },
    "aw-search-modal__input-icon i": {
        "pointerEvents": "auto",
        "cursor": "pointer"
    },
    "aw-layout-page": {
        "position": "relative",
        "overflowX": "hidden",
        "width": "100%",
        "minHeight": "100%",
        "paddingBottom": 60
    },
    "aw-layout-footer": {
        "position": "absolute",
        "left": 0,
        "right": 0,
        "bottom": 0,
        "height": 50,
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "borderTop": "1px solid #eee",
        "transition": "all .5s"
    },
    "aw-layout-content": {
        "position": "relative",
        "marginTop": 50,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "transition": "all .5s"
    },
    "aw-layout-sidebaris-toggled": {
        "marginLeft": 0
    },
    "aw-layout-sidebar__content": {
        "position": "relative",
        "overflowY": "auto",
        "height": "100%",
        "width": 210
    },
    "aw-layout-simple-page__container": {
        "display": "block",
        "maxWidth": 420,
        "marginTop": "auto",
        "marginRight": "auto",
        "marginBottom": "auto",
        "marginLeft": "auto",
        "paddingTop": "10%",
        "paddingRight": 10,
        "paddingBottom": 0,
        "paddingLeft": 10
    },
    "aw-layout-loading": {
        "position": "fixed",
        "zIndex": 9998,
        "display": "none",
        "width": "100%",
        "height": "100%",
        "paddingBottom": 65,
        "textAlign": "center"
    },
    "aw-layout-loading__container": {
        "display": "table-cell",
        "verticalAlign": "middle"
    },
    "aw-balls-spinner:not(:required)": {
        "position": "relative",
        "display": "inline-block",
        "width": 65,
        "height": 65,
        "opacity": 0.8,
        "borderRadius": "100%",
        "background": "#1e94d2",
        "textIndent": -9999,
        "MozAnimation": "aw-balls-spinner 3s infinite ease-in-out",
        "WebkitAnimation": "aw-balls-spinner 3s infinite ease-in-out",
        "animation": "aw-balls-spinner 3s infinite ease-in-out",
        "MozTransformOrigin": "50% 100%",
        "MsTransformOrigin": "50% 100%",
        "WebkitTransformOrigin": "50% 100%",
        "transformOrigin": "50% 100%"
    },
    "aw-balls-spinner:not(:required)::after": {
        "position": "absolute",
        "top": 48.75,
        "opacity": 0.8,
        "borderRadius": "100%",
        "width": 65,
        "height": 65,
        "content": "''",
        "left": 28.15,
        "background": "#1875a5"
    },
    "aw-balls-spinner:not(:required)::before": {
        "position": "absolute",
        "top": 48.75,
        "opacity": 0.8,
        "borderRadius": "100%",
        "width": 65,
        "height": 65,
        "content": "''",
        "left": -28.15,
        "background": "#99d2f0"
    },
    "aw-error-panel": {
        "color": "#777",
        "textAlign": "center"
    },
    "aw-error-panel__title": {
        "fontSize": 32
    },
    "aw-error-panel__description": {
        "display": "block",
        "paddingTop": 18,
        "paddingRight": 0,
        "paddingBottom": 18,
        "paddingLeft": 0
    },
    "aw-error-panel__code": {
        "color": "#d9d9d9",
        "fontSize": 80,
        "fontWeight": "400"
    },
    "aw-footer-disclaimer": {
        "fontSize": "92%",
        "display": "block",
        "color": "#777",
        "lineHeight": 4,
        "textAlign": "center"
    },
    "aw-logged-user": {
        "display": "block",
        "paddingTop": 20,
        "paddingRight": 20,
        "paddingBottom": 20,
        "paddingLeft": 20
    },
    "aw-logged-user__picture": {
        "display": "block",
        "marginTop": "auto",
        "marginRight": "auto",
        "marginBottom": "auto",
        "marginLeft": "auto",
        "paddingTop": 2,
        "paddingRight": 2,
        "paddingBottom": 2,
        "paddingLeft": 2,
        "borderRadius": "50%",
        "border": "1px solid #d5d5d5"
    },
    "aw-logged-user__name": {
        "display": "block",
        "minWidth": 180,
        "marginTop": 10,
        "fontWeight": "500",
        "textAlign": "center"
    },
    "aw-search-modal": {
        "position": "fixed",
        "top": 0,
        "bottom": 0,
        "right": 0,
        "left": 0,
        "zIndex": 9999,
        "display": "none",
        "paddingTop": "25%",
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "backgroundColor": "#1e94d2",
        "textAlign": "center",
        "fontSize": 18
    },
    "aw-search-modalis-shown": {
        "display": "block"
    },
    "aw-search-modal__form": {
        "position": "relative"
    },
    "aw-search-modal__input": {
        "display": "block",
        "width": "100%",
        "height": 104,
        "paddingLeft": 40,
        "paddingRight": 92,
        "borderRadius": 2,
        "border": "none",
        "color": "#fff",
        "backgroundColor": "#29a1e0",
        "lineHeight": 104,
        "textAlign": "center",
        "outline": 0
    },
    "aw-search-modal__input::-moz-placeholder": {
        "color": "#82c8ed",
        "opacity": 1
    },
    "aw-search-modal__input:-ms-input-placeholder": {
        "color": "#82c8ed"
    },
    "aw-search-modal__input::-webkit-input-placeholder": {
        "color": "#82c8ed"
    },
    "aw-search-modal__input-icon": {
        "position": "absolute",
        "display": "block",
        "width": 52,
        "height": 104,
        "top": 0,
        "right": 20,
        "zIndex": 2,
        "color": "#115579",
        "lineHeight": 104,
        "textAlign": "center"
    },
    "aw-search-modal__input-icon i:hover": {
        "color": "#0b364c"
    },
    "aw-search-modal__controls": {
        "position": "absolute",
        "top": 20,
        "right": 20,
        "color": "#115579",
        "fontSize": 26
    },
    "aw-search-modal__controls i:hover": {
        "color": "#0b364c"
    },
    "aw-simple-panel": {
        "color": "#777",
        "textAlign": "center"
    },
    "aw-simple-panel__message": {
        "paddingTop": 20,
        "paddingRight": 0,
        "paddingBottom": 20,
        "paddingLeft": 0
    },
    "aw-simple-panel__messageis-error": {
        "color": "#e70500"
    },
    "aw-simple-panel__box": {
        "paddingTop": 20,
        "paddingRight": 20,
        "paddingBottom": 5,
        "paddingLeft": 20,
        "border": "1px solid #ccc",
        "borderRadius": 2,
        "backgroundColor": "#fff"
    },
    "aw-simple-panel__footer": {
        "paddingTop": 10,
        "paddingRight": 0,
        "paddingBottom": 10,
        "paddingLeft": 0
    },
    "aw-menu__list": {
        "marginBottom": 0,
        "paddingLeft": 0,
        "listStyle": "none"
    },
    "aw-menu__list--sublist": {
        "display": "none"
    },
    "aw-menu__item": {
        "position": "relative",
        "display": "block"
    },
    "aw-menu__item>a": {
        "position": "relative",
        "display": "block",
        "paddingTop": 10,
        "paddingRight": 15,
        "paddingBottom": 10,
        "paddingLeft": 15,
        "color": "#1a1a1a",
        "fontWeight": "500"
    },
    "aw-box__icon": {
        "color": "#1e94d2",
        "float": "left"
    },
    "aw-menu__itemis-active>a": {
        "color": "#1e94d2"
    },
    "aw-menu__item>a>i": {
        "marginRight": 6
    },
    "aw-menu__item>a:focus": {
        "background": "#eee",
        "textDecoration": "none"
    },
    "aw-menu__item>a:hover": {
        "background": "#eee",
        "textDecoration": "none"
    },
    "aw-menu__itemis-expanded": {
        "borderLeft": "3px solid",
        "borderLeftColor": "#1e94d2",
        "background": "#f4f4f4"
    },
    "aw-menu__itemis-expanded aw-menu__navigation-icon:before": {
        "content": "\\f0d7"
    },
    "aw-fa-arrow-left:before": {
        "content": "\\f0d9"
    },
    "aw-menu__navigation-icon:before": {
        "content": "\\f0d9"
    },
    "aw-menu__itemis-expanded>aw-menu__list": {
        "display": "block",
        "background": "#fafafa"
    },
    "aw-menu__itemis-expanded>a": {
        "marginLeft": -3
    },
    "aw-menu__item--link>a": {
        "paddingLeft": 36,
        "fontWeight": "400"
    },
    "aw-menu__navigation-icon": {
        "float": "right"
    },
    "aw-box": {
        "paddingTop": 20,
        "paddingRight": 20,
        "paddingBottom": 20,
        "paddingLeft": 20,
        "marginBottom": 15,
        "border": "1px solid #eee",
        "borderBottom": "3px solid #1e94d2"
    },
    "aw-box__value": {
        "fontSize": 1.69,
        "fontWeight": "300",
        "textAlign": "right"
    },
    "aw-box__title": {
        "display": "block",
        "fontSize": 1,
        "fontWeight": "600",
        "textAlign": "right"
    },
    "aw-graph-box": {
        "marginBottom": 15,
        "border": "1px solid #eee",
        "borderBottom": "3px solid #eee"
    },
    "aw-graph-box__header": {
        "paddingTop": 15,
        "paddingRight": 20,
        "paddingBottom": 15,
        "paddingLeft": 20,
        "borderBottom": "1px solid #eee"
    },
    "aw-graph-box__content": {
        "paddingTop": 15,
        "paddingRight": 20,
        "paddingBottom": 15,
        "paddingLeft": 20
    },
    "aw-graph-box__no-data": {
        "position": "absolute",
        "top": 0,
        "left": 0,
        "right": 0,
        "bottom": 0,
        "display": "flex",
        "width": "100%",
        "alignItems": "center",
        "justifyContent": "center",
        "color": "#777"
    },
    "aw-graph-box__no-data>i": {
        "marginRight": 5
    },
    "aw-graph-box__title": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "fontSize": 1.1,
        "fontWeight": "500"
    },
    "aw-text-xs-left": {
        "textAlign": "left"
    },
    "aw-text-xs-right": {
        "textAlign": "right"
    },
    "aw-text-xs-center": {
        "textAlign": "center"
    },
    "aw-text-xs-justify": {
        "textAlign": "justify"
    },
    "body": {
        "height": "100%"
    },
    "html": {
        "height": "100%"
    },
    "aw-no-scroll": {
        "overflow": "hidden!important"
    },
    "aw-form-label-between": {
        "display": "inline-block",
        "paddingTop": 0,
        "paddingRight": 5,
        "paddingBottom": 0,
        "paddingLeft": 5
    },
    "aw-datatable-toolbar": {
        "marginBottom": 10,
        "marginTop": 30
    },
    "aw-fa-arrow-down:before": {
        "content": "\\f0d7"
    },
    "aw-alert-no-results": {
        "backgroundColor": "#f9f9f9",
        "borderColor": "#f1f1f1",
        "color": "#7a7a7a",
        "lineHeight": 3,
        "textAlign": "center"
    },
    "aw-alert-no-results hr": {
        "borderTopColor": "#e5e5e5"
    },
    "aw-alert-no-results alert-link": {
        "color": "#606060"
    },
    "aw-label-corner": {
        "position": "absolute",
        "top": 9,
        "right": 4,
        "paddingTop": 2,
        "paddingRight": 5,
        "paddingBottom": 2,
        "paddingLeft": 5
    },
    "aw-form-control-inline-sm": {
        "display": "inline-block!important",
        "width": "33%!important"
    },
    "aw-btn-cancel": {
        "color": "#fff",
        "backgroundColor": "#a1a1a1",
        "borderColor": "#949494"
    },
    "aw-btn-cancelfocus": {
        "color": "#fff",
        "backgroundColor": "#888",
        "borderColor": "#545454"
    },
    "aw-btn-cancel:focus": {
        "color": "#fff",
        "backgroundColor": "#888",
        "borderColor": "#545454"
    },
    "aw-btn-cancelactive": {
        "color": "#fff",
        "backgroundColor": "#888",
        "borderColor": "#767676",
        "backgroundImage": "none"
    },
    "aw-btn-cancel:active": {
        "color": "#fff",
        "backgroundColor": "#888",
        "borderColor": "#767676",
        "backgroundImage": "none"
    },
    "aw-btn-cancel:hover": {
        "color": "#fff",
        "backgroundColor": "#888",
        "borderColor": "#767676"
    },
    "open>dropdown-toggleaw-btn-cancel": {
        "color": "#fff",
        "backgroundColor": "#888",
        "borderColor": "#767676",
        "backgroundImage": "none"
    },
    "aw-btn-cancel badge": {
        "color": "#a1a1a1",
        "backgroundColor": "#fff"
    },
    "aw-btn-link-danger": {
        "color": "#d9534f"
    },
    "aw-btn-link-danger:active": {
        "color": "#b52b27",
        "outline": 0
    },
    "aw-btn-link-danger:focus": {
        "color": "#b52b27",
        "outline": 0
    },
    "aw-btn-link-danger:hover": {
        "color": "#b52b27",
        "outline": 0
    },
    "aw-btn-thin-caret": {
        "paddingLeft": "5px!important",
        "paddingRight": "5px!important"
    },
    "aw-btn-full-width": {
        "width": "100%"
    },
    "aw-table-header-solid": {
        "background": "#fff"
    },
    "aw-table-checkbox": {
        "minWidth": 25,
        "textAlign": "center"
    },
    "pagination": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0
    },
    "page-header": {
        "paddingBottom": 0,
        "backgroundColor": "#fafbfd"
    },
    "page-header h1": {
        "display": "flex",
        "justifyContent": "flex-start",
        "alignItems": "center",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "height": 80,
        "color": "#333"
    },
    "aw-page-header-controls": {
        "display": "flex",
        "justifyContent": "flex-end",
        "alignItems": "center",
        "height": 80
    },
    "aw-checkbox-no-margin": {
        "marginTop": "0!important",
        "marginBottom": "0!important"
    }
});