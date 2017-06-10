import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "body": {
        "paddingTop": 0
    },
    "sub-header": {
        "paddingBottom": 10,
        "borderBottom": "1px solid #eee"
    },
    "navbar-fixed-top": {
        "border": 0
    },
    "sidebar": {
        "display": "none"
    },
    "nav-sidebar": {
        "marginRight": -21,
        "marginBottom": 20,
        "marginLeft": -20
    },
    "nav-sidebar > li > a": {
        "paddingRight": 20,
        "paddingLeft": 20
    },
    "nav-sidebar > a": {
        "color": "#fff",
        "backgroundColor": "#428bca"
    },
    "nav-sidebar > a:hover": {
        "color": "#fff",
        "backgroundColor": "#428bca"
    },
    "nav-sidebar > a:focus": {
        "color": "#fff",
        "backgroundColor": "#428bca"
    },
    "main": {
        "paddingTop": 20,
        "paddingRight": 20,
        "paddingBottom": 20,
        "paddingLeft": 20
    },
    "main page-header": {
        "marginTop": 0
    },
    "placeholders": {
        "marginBottom": 30,
        "textAlign": "center"
    },
    "placeholders h4": {
        "marginBottom": 0
    },
    "placeholder": {
        "marginBottom": 20
    },
    "placeholder img": {
        "display": "inline-block",
        "borderRadius": "50%"
    }
});