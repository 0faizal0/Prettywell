<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/8040ad99ed.js" crossorigin="anonymous"></script>
  <title>Order Management</title>

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {

const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// Your code to run since DOM is loaded and ready
});
  </script>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

:root {
    --header-height: 3rem;
    --nav-width: 68px;
    --first-color: #4723D9;
    --first-color-light: #AFA5D9;
    --white-color: #F7F6FB;
    --body-font: 'Nunito', sans-serif;
    --normal-font-size: 1rem;
    --z-fixed: 100
}

*,
::before,
::after {
    box-sizing: border-box
}

body {
    position: relative;
    margin: var(--header-height) 0 0 0;
    padding: 0 1rem;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    transition: .5s
}

a {
    text-decoration: none
}

.header {
    width: 100%;
    height: var(--header-height);
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1rem;
    background-color: var(--white-color);
    z-index: var(--z-fixed);
    transition: .5s
}

.header_toggle {
    color: var(--first-color);
    font-size: 1.5rem;
    cursor: pointer
}

.header_img {
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    border-radius: 50%;
    overflow: hidden
}

.header_img img {
    width: 40px
}

.l-navbar {
    position: fixed;
    top: 0;
    left: -30%;
    width: var(--nav-width);
    height: 100vh;
    background-color: var(--first-color);
    padding: .5rem 1rem 0 0;
    transition: .5s;
    z-index: var(--z-fixed)
}

.nav {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden
}

.nav_logo,
.nav_link {
    display: grid;
    grid-template-columns: max-content max-content;
    align-items: center;
    column-gap: 1rem;
    padding: .5rem 0 .5rem 1.5rem
}

.nav_logo {
    margin-bottom: 2rem
}

.nav_logo-icon {
    font-size: 1.25rem;
    color: var(--white-color)
}

.nav_logo-name {
    color: var(--white-color);
    font-weight: 700
}

.nav_link {
    position: relative;
    color: var(--first-color-light);
    margin-bottom: 1.5rem;
    transition: .3s
}

.nav_link:hover {
    color: var(--white-color)
}

.nav_icon {
    font-size: 1.25rem
}

.show {
    left: 0
}

.body-pd {
    padding-left: calc(var(--nav-width) + 1rem)
}

.active {
    color: var(--white-color)
}

.active::before {
    content: '';
    position: absolute;
    left: 0;
    width: 2px;
    height: 32px;
    background-color: var(--white-color)
}

.height-100 {
    height: 100vh
}

@media screen and (min-width: 768px) {
    body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
    }

    .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
    }

    .header_img {
        width: 40px;
        height: 40px
    }

    .header_img img {
        width: 45px
    }

    .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
    }

    .show {
        width: calc(var(--nav-width) + 156px)
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 188px)
    }
}

body {
    background: #eee
}
  </style>

<style>
    :root {
    --blue: #5e72e4;
    --indigo: #5603ad;
    --purple: #8965e0;
    --pink: #f3a4b5;
    --red: #f5365c;
    --orange: #fb6340;
    --yellow: #ffd600;
    --green: #2dce89;
    --teal: #11cdef;
    --cyan: #2bffc6;
    --white: #fff;
    --gray: #8898aa;
    --gray-dark: #32325d;
    --light: #ced4da;
    --lighter: #e9ecef;
    --primary: #5e72e4;
    --secondary: #f7fafc;
    --success: #2dce89;
    --info: #11cdef;
    --warning: #fb6340;
    --danger: #f5365c;
    --light: #adb5bd;
    --dark: #212529;
    --default: #172b4d;
    --white: #fff;
    --neutral: #fff;
    --darker: black;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: Open Sans, sans-serif;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

@-ms-viewport {
    width: device-width;
}

figcaption,
footer,
main,
nav,
section {
    display: block;
}

body {
    font-family: Open Sans, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0;
    text-align: left;
    color: #525f7f;
    background-color: #f8f9fe;
}

[tabindex='-1']:focus {
    outline: 0 !important;
}

h2,
h3 {
    margin-top: 0;
    margin-bottom: .5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

ul {
    margin-top: 0;
    margin-bottom: 1rem;
}

ul ul {
    margin-bottom: 0;
}

dfn {
    font-style: italic;
}

strong {
    font-weight: bolder;
}

a {
    text-decoration: none;
    color: #5e72e4;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}

a:hover {
    text-decoration: none;
    color: #233dd2;
}

a:not([href]):not([tabindex]) {
    text-decoration: none;
    color: inherit;
}

a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
    text-decoration: none;
    color: inherit;
}

a:not([href]):not([tabindex]):focus {
    outline: 0;
}

img {
    vertical-align: middle;
    border-style: none;
}

table {
    border-collapse: collapse;
}

caption {
    padding-top: 1rem;
    padding-bottom: 1rem;
    caption-side: bottom;
    text-align: left;
    color: #8898aa;
}

th {
    text-align: inherit;
}

button {
    border-radius: 0;
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

input,
button {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    margin: 0;
}

button,
input {
    overflow: visible;
}

button {
    text-transform: none;
}

button,
[type='reset'],
[type='submit'] {
    -webkit-appearance: button;
}

button::-moz-focus-inner,
[type='button']::-moz-focus-inner,
[type='reset']::-moz-focus-inner,
[type='submit']::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

input[type='radio'],
input[type='checkbox'] {
    box-sizing: border-box;
    padding: 0;
}

input[type='date'],
input[type='time'],
input[type='datetime-local'],
input[type='month'] {
    -webkit-appearance: listbox;
}

legend {
    font-size: 1.5rem;
    line-height: inherit;
    display: block;
    width: 100%;
    max-width: 100%;
    margin-bottom: .5rem;
    padding: 0;
    white-space: normal;
    color: inherit;
}

progress {
    vertical-align: baseline;
}

[type='number']::-webkit-inner-spin-button,
[type='number']::-webkit-outer-spin-button {
    height: auto;
}

[type='search'] {
    outline-offset: -2px;
    -webkit-appearance: none;
}

[type='search']::-webkit-search-cancel-button,
[type='search']::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}

[hidden] {
    display: none !important;
}

h2,
h3,
.h2,
.h3 {
    font-family: inherit;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: .5rem;
    color: #32325d;
}

h2,
.h2 {
    font-size: 1.25rem;
}

h3,
.h3 {
    font-size: 1.0625rem;
}

.container {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

.row {
    display: flex;
    margin-right: -15px;
    margin-left: -15px;
    flex-wrap: wrap;
}

.col,
.col-xl-6 {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col {
    max-width: 100%;
    flex-basis: 0;
    flex-grow: 1;
}

@media (min-width: 1200px) {

    .col-xl-6 {
        max-width: 50%;
        flex: 0 0 50%;
    }
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}

.table th,
.table td {
    padding: 1rem;
    vertical-align: top;
    border-top: 1px solid #e9ecef;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e9ecef;
}

.table tbody + tbody {
    border-top: 2px solid #e9ecef;
}

.table .table {
    background-color: #f8f9fe;
}

.table-dark,
.table-dark > th,
.table-dark > td {
    background-color: #c1c2c3;
}

.table .thead-dark th {
    color: #f8f9fe;
    border-color: #1f3a68;
    background-color: #172b4d;
}

.table .thead-light th {
    color: #8898aa;
    border-color: #e9ecef;
    background-color: #f6f9fc;
}

.table-dark {
    color: #f8f9fe;
    background-color: #172b4d;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
    border-color: #1f3a68;
}

.table-responsive {
    display: block;
    overflow-x: auto;
    width: 100%;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

.btn {
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;
    display: inline-block;
    padding: .625rem 1.25rem;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    border: 1px solid transparent;
    border-radius: .375rem;
}

@media screen and (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}

.btn:hover,
.btn:focus {
    text-decoration: none;
}

.btn:focus {
    outline: 0;
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.btn.disabled,
.btn:disabled {
    opacity: .65;
    box-shadow: none;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active,
.btn:not(:disabled):not(.disabled).active {
    box-shadow: none;
}

.btn:not(:disabled):not(.disabled):active:focus,
.btn:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08), none;
}

a.btn.disabled {
    pointer-events: none;
}

.btn-sm {
    font-size: .875rem;
    line-height: 1.5;
    padding: .25rem .5rem;
    border-radius: .375rem;
}

.dropdown {
    position: relative;
}

.dropdown-menu {
    font-size: 1rem;
    position: absolute;
    z-index: 1000;
    top: 100%;
    left: 0;
    display: none;
    float: left;
    min-width: 10rem;
    margin: .125rem 0 0;
    padding: .5rem 0;
    list-style: none;
    text-align: left;
    color: #525f7f;
    border: 0 solid rgba(0, 0, 0, .15);
    border-radius: .4375rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 50px 100px rgba(50, 50, 93, .1), 0 15px 35px rgba(50, 50, 93, .15), 0 5px 15px rgba(0, 0, 0, .1);
}

.dropdown-menu-right {
    right: 0;
    left: auto;
}

.dropdown-menu[x-placement^='top'],
.dropdown-menu[x-placement^='right'],
.dropdown-menu[x-placement^='bottom'],
.dropdown-menu[x-placement^='left'] {
    right: auto;
    bottom: auto;
}

.dropdown-item {
    font-weight: 400;
    display: block;
    clear: both;
    width: 100%;
    padding: .25rem 1.5rem;
    text-align: inherit;
    white-space: nowrap;
    color: #212529;
    border: 0;
    background-color: transparent;
}

.dropdown-item:hover,
.dropdown-item:focus {
    text-decoration: none;
    color: #16181b;
    background-color: #f6f9fc;
}

.dropdown-item.active,
.dropdown-item:active {
    text-decoration: none;
    color: #fff;
    background-color: #5e72e4;
}

.dropdown-item.disabled,
.dropdown-item:disabled {
    color: #8898aa;
    background-color: transparent;
}

.nav {
    display: flex;
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
    flex-wrap: wrap;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    border: 1px solid rgba(0, 0, 0, .05);
    border-radius: .375rem;
    background-color: #fff;
    background-clip: border-box;
}

.card-header {
    margin-bottom: 0;
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}

.card-header:first-child {
    border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
}

.card-footer {
    padding: 1.25rem 1.5rem;
    border-top: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}

.card-footer:last-child {
    border-radius: 0 0 calc(.375rem - 1px) calc(.375rem - 1px);
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: .375rem;
}

.page-link {
    line-height: 1.25;
    position: relative;
    display: block;
    margin-left: -1px;
    padding: .5rem .75rem;
    color: #8898aa;
    border: 1px solid #dee2e6;
    background-color: #fff;
}

.page-link:hover {
    z-index: 2;
    text-decoration: none;
    color: #8898aa;
    border-color: #dee2e6;
    background-color: #dee2e6;
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: none;
}

.page-link:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: .375rem;
    border-bottom-left-radius: .375rem;
}

.page-item:last-child .page-link {
    border-top-right-radius: .375rem;
    border-bottom-right-radius: .375rem;
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    border-color: #5e72e4;
    background-color: #5e72e4;
}

.page-item.disabled .page-link {
    cursor: auto;
    pointer-events: none;
    color: #8898aa;
    border-color: #dee2e6;
    background-color: #fff;
}

.badge {
    font-size: 66%;
    font-weight: 600;
    line-height: 1;
    display: inline-block;
    padding: .35rem .375rem;
    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;
    border-radius: .375rem;
}

.badge:empty {
    display: none;
}

.btn .badge {
    position: relative;
    top: -1px;
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }

    to {
        background-position: 0 0;
    }
}

.progress {
    font-size: .75rem;
    display: flex;
    overflow: hidden;
    height: 1rem;
    border-radius: .375rem;
    background-color: #e9ecef;
    box-shadow: inset 0 .1rem .1rem rgba(0, 0, 0, .1);
}

.progress-bar {
    display: flex;
    flex-direction: column;
    transition: width .6s ease;
    text-align: center;
    white-space: nowrap;
    color: #fff;
    background-color: #5e72e4;
    justify-content: center;
}

@media screen and (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.media {
    display: flex;
    align-items: flex-start;
}

.media-body {
    flex: 1 1;
}

.tooltip {
    font-family: Open Sans, sans-serif;
    font-size: .875rem;
    font-weight: 400;
    font-style: normal;
    line-height: 1.5;
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    text-align: left;
    text-align: start;
    white-space: normal;
    text-decoration: none;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    word-wrap: break-word;
    word-break: normal;
    opacity: 0;
    text-shadow: none;
    line-break: auto;
}

.tooltip.show
{
    opacity: .9;
}
.tooltip .arrow
{
    position: absolute;

    display: block;

    width: .8rem;
    height: .4rem;
}
.tooltip .arrow::before
{
    position: absolute;

    content: '';

    border-style: solid;
    border-color: transparent;
}

.bs-tooltip-top,
.bs-tooltip-auto[x-placement^='top']
{
    padding: .4rem 0;
}
.bs-tooltip-top .arrow,
.bs-tooltip-auto[x-placement^='top'] .arrow
{
    bottom: 0;
}
.bs-tooltip-top .arrow::before,
.bs-tooltip-auto[x-placement^='top'] .arrow::before
{
    top: 0;

    border-width: .4rem .4rem 0;
    border-top-color: #000;
}

.bs-tooltip-right,
.bs-tooltip-auto[x-placement^='right']
{
    padding: 0 .4rem;
}
.bs-tooltip-right .arrow,
.bs-tooltip-auto[x-placement^='right'] .arrow
{
    left: 0;

    width: .4rem;
    height: .8rem;
}
.bs-tooltip-right .arrow::before,
.bs-tooltip-auto[x-placement^='right'] .arrow::before
{
    right: 0;

    border-width: .4rem .4rem .4rem 0;
    border-right-color: #000;
}

.bs-tooltip-bottom,
.bs-tooltip-auto[x-placement^='bottom']
{
    padding: .4rem 0;
}
.bs-tooltip-bottom .arrow,
.bs-tooltip-auto[x-placement^='bottom'] .arrow
{
    top: 0;
}
.bs-tooltip-bottom .arrow::before,
.bs-tooltip-auto[x-placement^='bottom'] .arrow::before
{
    bottom: 0;

    border-width: 0 .4rem .4rem;
    border-bottom-color: #000;
}

.bs-tooltip-left,
.bs-tooltip-auto[x-placement^='left']
{
    padding: 0 .4rem;
}
.bs-tooltip-left .arrow,
.bs-tooltip-auto[x-placement^='left'] .arrow
{
    right: 0;

    width: .4rem;
    height: .8rem;
}
.bs-tooltip-left .arrow::before,
.bs-tooltip-auto[x-placement^='left'] .arrow::before
{
    left: 0;

    border-width: .4rem 0 .4rem .4rem;
    border-left-color: #000;
}

.tooltip-inner
{
    max-width: 200px;
    padding: .25rem .5rem;

    text-align: center;

    color: #fff;
    border-radius: .375rem;
    background-color: #000;
}

.bg-success {
    background-color: #2dce89 !important;
}

a.bg-success:hover,
a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
    background-color: #24a46d !important;
}

.bg-info {
    background-color: #11cdef !important;
}

a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
    background-color: #0da5c0 !important;
}

.bg-warning {
    background-color: #fb6340 !important;
}

a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
    background-color: #fa3a0e !important;
}

.bg-danger {
    background-color: #f5365c !important;
}

a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
    background-color: #ec0c38 !important;
}

.bg-default {
    background-color: #172b4d !important;
}

a.bg-default:hover,
a.bg-default:focus,
button.bg-default:hover,
button.bg-default:focus {
    background-color: #0b1526 !important;
}

.bg-transparent {
    background-color: transparent !important;
}

.border-0 {
    border: 0 !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.d-flex {
    display: flex !important;
}

.justify-content-end {
    justify-content: flex-end !important;
}

.align-items-center {
    align-items: center !important;
}

@media (min-width: 1200px) {

    .justify-content-xl-between {
        justify-content: space-between !important;
    }
}

.sr-only {
    position: absolute;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    width: 1px;
    height: 1px;
    padding: 0;
    white-space: nowrap;
    border: 0;
}

.shadow {
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}

.mb-0 {
    margin-bottom: 0 !important;
}

.mr-2 {
    margin-right: .5rem !important;
}

.mr-3 {
    margin-right: 1rem !important;
}

.mr-4 {
    margin-right: 1.5rem !important;
}

.mt-5 {
    margin-top: 3rem !important;
}

.mb-5 {
    margin-bottom: 3rem !important;
}

.mt-7 {
    margin-top: 6rem !important;
}

.py-4 {
    padding-top: 1.5rem !important;
}

.py-4 {
    padding-bottom: 1.5rem !important;
}

.m-auto {
    margin: auto !important;
}

.text-right {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

.text-white {
    color: #fff !important;
}

.text-light {
    color: #adb5bd !important;
}

a.text-light:hover,
a.text-light:focus {
    color: #919ca6 !important;
}

.text-white {
    color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
    color: #e6e6e6 !important;
}

@media print {
    *,
  *::before,
  *::after {
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a:not(.btn) {
        text-decoration: underline;
    }

    thead {
        display: table-header-group;
    }

    tr,
  img {
        page-break-inside: avoid;
    }

    p,
  h2,
  h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
  h3 {
        page-break-after: avoid;
    }

@    page {
        size: a3;
    }

    body {
        min-width: 992px !important;
    }

    .container {
        min-width: 992px !important;
    }

    .badge {
        border: 1px solid #000;
    }

    .table {
        border-collapse: collapse !important;
    }

    .table td,
  .table th {
        background-color: #fff !important;
    }

    .table-dark {
        color: inherit;
    }

    .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
        border-color: #e9ecef;
    }

    .table .thead-dark th {
        color: inherit;
        border-color: #e9ecef;
    }
}

figcaption,
main {
    display: block;
}

main {
    overflow: hidden;
}

@keyframes floating-lg {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(15px);
    }

    100% {
        transform: translateY(0px);
    }
}

@keyframes floating {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(10px);
    }

    100% {
        transform: translateY(0px);
    }
}

@keyframes floating-sm {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(5px);
    }

    100% {
        transform: translateY(0px);
    }
}

[class*='shadow'] {
    transition: all .15s ease;
}

.text-sm {
    font-size: .875rem !important;
}

.text-white {
    color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
    color: #e6e6e6 !important;
}

.text-light {
    color: #ced4da !important;
}

a.text-light:hover,
a.text-light:focus {
    color: #b1bbc4 !important;
}

.avatar {
    font-size: 1rem;
    display: inline-flex;
    width: 48px;
    height: 48px;
    color: #fff;
    border-radius: 50%;
    background-color: #adb5bd;
    align-items: center;
    justify-content: center;
}

.avatar img {
    width: 100%;
    border-radius: 50%;
}

.avatar-sm {
    font-size: .875rem;
    width: 36px;
    height: 36px;
}

.avatar-group .avatar {
    position: relative;
    z-index: 2;
    border: 2px solid #fff;
}

.avatar-group .avatar:hover {
    z-index: 3;
}

.avatar-group .avatar + .avatar {
    margin-left: -1rem;
}

.badge {
    text-transform: uppercase;
}

.badge a {
    color: #fff;
}

.btn .badge:not(:first-child) {
    margin-left: .5rem;
}

.btn .badge:not(:last-child) {
    margin-right: .5rem;
}

.badge-dot {
    font-size: .875rem;
    font-weight: 400;
    padding-right: 0;
    padding-left: 0;
    text-transform: none;
    background: transparent;
}

.badge-dot strong {
    color: #32325d;
}

.badge-dot i {
    display: inline-block;
    width: .375rem;
    height: .375rem;
    margin-right: .375rem;
    vertical-align: middle;
    border-radius: 50%;
}

.btn {
    font-size: .875rem;
    position: relative;
    transition: all .15s ease;
    letter-spacing: .025em;
    text-transform: none;
    will-change: transform;
}

.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.btn:not(:last-child) {
    margin-right: .5rem;
}

.btn i:not(:first-child) {
    margin-left: .5rem;
}

.btn i:not(:last-child) {
    margin-right: .5rem;
}

.btn-sm {
    font-size: .75rem;
}

[class*='btn-outline-'] {
    border-width: 1px;
}

.btn-icon-only {
    width: 2.375rem;
    height: 2.375rem;
    padding: 0;
}

a.btn-icon-only {
    line-height: 2.5;
}

.btn-icon-only.btn-sm {
    width: 2rem;
    height: 2rem;
}

.main-content {
    position: relative;
}

.dropdown {
    display: inline-block;
}

.dropdown-menu {
    min-width: 12rem;
}
.dropdown-menu.show
{
    display: block;
}


.dropdown-menu .dropdown-item {
    font-size: .875rem;
    padding: .5rem 1rem;
}

.dropdown-menu .dropdown-item > i {
    font-size: 1rem;
    margin-right: 1rem;
    vertical-align: -17%;
}

.dropdown-menu a.media > div:first-child {
    line-height: 1;
}

.dropdown-menu a.media p {
    color: #8898aa;
}

.dropdown-menu a.media:hover p {
    color: #172b4d !important;
}

.footer {
    padding: 2.5rem 0;
    background: #f7fafc;
}

.footer .copyright {
    font-size: .875rem;
}

@media (min-width: 768px) {

@    keyframes show-navbar-dropdown {
        0% {
      transition: visibility .25s, opacity .25s, transform .25s;
        transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
        opacity: 0;
    }

    100% {
        transform: translate(0, 0);
        opacity: 1;
    }
}

@keyframes hide-navbar-dropdown {
    from {
        opacity: 1;
    }

    to {
        transform: translate(0, 10px);
        opacity: 0;
    }
}
}

@keyframes show-navbar-collapse {
    0% {
        transform: scale(.95);
        transform-origin: 100% 0;
        opacity: 0;
    }

    100% {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes hide-navbar-collapse {
    from {
        transform: scale(1);
        transform-origin: 100% 0;
        opacity: 1;
    }

    to {
        transform: scale(.95);
        opacity: 0;
    }
}

.page-item.active .page-link {
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.page-item .page-link,
.page-item span {
    font-size: .875rem;
    display: flex;
    width: 36px;
    height: 36px;
    margin: 0 3px;
    padding: 0;
    border-radius: 50% !important;
    align-items: center;
    justify-content: center;
}

.progress {
    overflow: hidden;
    height: 8px;
    margin-bottom: 1rem;
    border-radius: .25rem;
    background-color: #e9ecef;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}

.progress .sr-only {
    font-size: 13px;
    line-height: 20px;
    left: 0;
    clip: auto;
    width: auto;
    height: 20px;
    margin: 0 0 0 30px;
}

.progress-bar {
    height: auto;
    border-radius: 0;
    box-shadow: none;
}

.table thead th {
    font-size: .65rem;
    padding-top: .75rem;
    padding-bottom: .75rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-bottom: 1px solid #e9ecef;
}

.table th {
    font-weight: 600;
}

.table td .progress {
    width: 120px;
    height: 3px;
    margin: 0;
}

.table td,
.table th {
    font-size: .8125rem;
    white-space: nowrap;
}

.table.align-items-center td,
.table.align-items-center th {
    vertical-align: middle;
}

.table .thead-dark th {
    color: #4d7bca;
    background-color: #1c345d;
}

.table .thead-light th {
    color: #8898aa;
    background-color: #f6f9fc;
}

.table-flush td,
.table-flush th {
    border-right: 0;
    border-left: 0;
}

.table-flush tbody tr:first-child td,
.table-flush tbody tr:first-child th {
    border-top: 0;
}

.table-flush tbody tr:last-child td,
.table-flush tbody tr:last-child th {
    border-bottom: 0;
}

.card .table {
    margin-bottom: 0;
}

.card .table td,
.card .table th {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}

p {
    font-size: 1rem;
    font-weight: 300;
    line-height: 1.7;
}

@media (max-width: 768px) {
    .btn {
        margin-bottom: 10px;
    }
}

</style>

</head>
<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

    <?php
    $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    if(!empty($pesanan_utama))
       {
        $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count(); 
       }
   ?>
   <a class="nav-link" href="{{ url('check-out') }}" style="width: 90%;">
       <i class="fa fa-shopping-cart" style="color: #007bff"></i>
       @if(!empty($notif))
       <span class="badge badge-danger">{{ $notif }}</span>
       @endif
   </a>

      <p style="color: black; margin-top: auto; margin-bottom: auto; margin-left: 1%;">{{ Auth::user()->name }}</p>
      <div class="header_img" style="margin-right: 10%;"> <img src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="avatar"> </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="/" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> 
        <span class="nav_logo-name">Prettywell</span> </a>
          <div class="nav_list">
            <a href="/toko" class="nav_link"> 
              <i class="fa-solid fa-store"></i> <span class="nav_name">Shop</span> </a> 
              <a href="/history" class="nav_link"> 
                <i class="fa-solid fa-clock-rotate-left"></i> <span class="nav_name">History</span> </a>
             <a href="/posts" class="nav_link"> 
                <i class="fa-solid fa-newspaper"></i>
                <span class="nav_name">All Article</span> </a>
                <a href="/acne" class="nav_link">
                    <i class="fa-solid fa-images"></i>
                    <span class="nav_name">Acne Story</span> </a>
                <a href="/profile" class="nav_link"> 
                      <i class="fa-solid fa-address-card"></i> <span class="nav_name">Profile</span> 
                    </a> @role('admin') 
                    <a href="/adminku" class="nav_link active"> 
                      <i class="fa-solid fa-cart-plus"></i> <span class="nav_name">Order Management</span> 
                    </a> 
                    <a href="/adminpost" class="nav_link"> 
                      <i class="fa-solid fa-hammer"></i> <span class="nav_name">Post Management</span> 
                    </a> 
                    <a href="/admin" class="nav_link">
                      <i class="fa-solid fa-user-gear"></i> <span class="nav_name">User Management</span> 
                    </a> @endrole</div>

      </div> <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
  </nav>
</div>
<!--Container Main start-->
<br><br><br>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User id</th>
                                <th>Tanggal</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->user_id }}</td>
                                <td>{{ $pesanan->tanggal }}</td>

                                <td>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode+$pesanan->ongkir) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h3><i class="fa fa-user"></i> Tabel User</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User id</th>
                                <th>Nama</th>
                                <th>Email</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<br><br>

</body>
</html>
