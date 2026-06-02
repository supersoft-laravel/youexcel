@extends('website.app')

@section('title', 'Cyber Security Master | Big Data Analytics Course in Karachi')
@section('meta_description', 'Master Cyber Security, Big Data Analytics, and Data Science in Karachi. Learn Data
    Analytics with SQL and advance your career with expert-led courses')
@section('meta_keywords', 'Cyber Security Master, Big Data Analytics Course in Karachi, data science and analytics, Data
    Analytics with SQL')


    @push('style')
        .dFXWkm {
        display: inline-flex;
        position: relative;
        -webkit-box-align: center;
        align-items: center;
        width: 100%;
        -webkit-box-pack: center;
        justify-content: center;
        text-align: center;
        border-width: 0.125rem;
        border-style: solid;
        border-color: transparent;
        padding: 0.75rem 2.8125rem 0.75rem 1.5625rem;
        border-radius: 0.3125rem;
        text-decoration: none;
        cursor: pointer;
        background-color: rgb(42, 78, 204);
        }

        .iioluD {
        font-family: Inter, Helvetica, sans-serif;
        font-size: 1.125rem;
        font-weight: 600;
        line-height: 1.5rem;
        color: rgb(255, 255, 255);
        }

        .ldsuNe {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #0000004d;
        opacity: 0;
        -webkit-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease;
        pointer-events: none;
        z-index: 21;
        }
        data-styled.g9[id="sc-ef3e0a3a-1"] {
        content: "ldsuNe,";
        }
        .gptORL {
        width: 100%;
        padding-left: 0.9375rem;
        padding-right: 2.5rem;
        }
        data-styled.g10[id="sc-ef3e0a3a-2"] {
        content: "gptORL,";
        }
        .ewtOBP {
        position: absolute;
        width: 1.875rem;
        height: 1.875rem;
        border: none;
        }
        .ewtOBP:hover {
        background-color: transparent;
        color: #12151a;
        border: none;
        }
        .ewtOBP .sc-438c3942-0 {
        font-size: 1rem;
        }
        data-styled.g11[id="sc-ef3e0a3a-3"] {
        content: "ewtOBP,";
        }
        .hnSsoh {
        overflow: hidden;
        }
        .hnSsoh .sc-ef3e0a3a-6 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        gap: 1.5rem;
        margin-top: 1rem;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        }
        @media (min-width: 1024px) {
        .hnSsoh .sc-ef3e0a3a-6 {
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        }
        }
        .hnSsoh .sc-ef3e0a3a-7,
        .hnSsoh .sc-ef3e0a3a-8 {
        background-color: #f6f8fb;
        padding: 1.5rem 1.875rem;
        min-height: 8.75rem;
        box-shadow: 0 0.5rem 0.75rem 0rem #00000026;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        }
        .hnSsoh .sc-ef3e0a3a-7::before,
        .hnSsoh .sc-ef3e0a3a-8::before {
        content: "";
        background-repeat: no-repeat;
        background-size: 30px;
        background-position: 0px center;
        width: 30px;
        height: 30px;
        }
        @media (min-width: 1024px) {
        .hnSsoh .sc-ef3e0a3a-7,
        .hnSsoh .sc-ef3e0a3a-8 {
        padding: 1.5rem 4.0625rem;
        max-width: 22.5rem;
        min-height: 11.25rem;
        }
        }
        .hnSsoh .sc-ef3e0a3a-7 .sc-1c76b7b1-2,
        .hnSsoh .sc-ef3e0a3a-8 .sc-1c76b7b1-2 {
        white-space: normal;
        text-align: center;
        margin-top: 0.625rem;
        }
        data-styled.g17[id="sc-ef3e0a3a-9"] {
        content: "hnSsoh,";
        }
        .RWNfr {
        display: block;
        }
        data-styled.g18[id="sc-4e9696ea-0"] {
        content: "RWNfr,";
        }
        .kLBujR {
        height: 2.5rem;
        width: 14.375rem;
        position: relative;
        overflow: hidden;
        background-color: #f6f8fb;
        z-index: 1;
        }
        .kLBujR:after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%);
        background: linear-gradient(
        100deg,
        rgba(56, 56, 56, 0) 0%,
        rgba(56, 56, 56, 0.1) 50%,
        rgba(56, 56, 56, 0) 100%
        );
        -webkit-animation: dvoAGX 2s infinite;
        animation: dvoAGX 2s infinite;
        content: "";
        }
        .kzUhTB {
        height: 100%;
        width: 100%;
        position: absolute;
        overflow: hidden;
        background-color: #f6f8fb;
        z-index: 1;
        }
        .kzUhTB:after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%);
        background: linear-gradient(
        100deg,
        rgba(56, 56, 56, 0) 0%,
        rgba(56, 56, 56, 0.1) 50%,
        rgba(56, 56, 56, 0) 100%
        );
        -webkit-animation: dvoAGX 2s infinite;
        animation: dvoAGX 2s infinite;
        content: "";
        }
        data-styled.g19[id="sc-1a2f0b9-0"] {
        content: "kLBujR,kzUhTB,";
        }
        .kntpRm {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        gap: 2.5rem;
        background: #ffffff;
        padding: 0rem 0.625rem 0.625rem;
        }
        @media (min-width: 768px) {
        .kntpRm {
        padding: 0rem 1.875rem 1.875rem;
        }
        }
        data-styled.g39[id="sc-c825f1f3-4"] {
        content: "kntpRm,";
        }
        .kQYFlT {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        }
        data-styled.g40[id="sc-5373962d-0"] {
        content: "kQYFlT,";
        }
        .cNXzgQ {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #000000;
        margin-right: 1rem;
        }
        .cNXzgQ:last-child {
        margin-right: 0;
        }
        @media (min-width: 1024px) {
        .cNXzgQ {
        -webkit-transition: opacity 0.2s ease;
        transition: opacity 0.2s ease;
        }
        .cNXzgQ:hover {
        opacity: 0.5;
        }
        }
        data-styled.g41[id="sc-5373962d-1"] {
        content: "cNXzgQ,";
        }
        .jFxQA {
        background-color: #12151a;
        }
        .jFxQA .sc-5373962d-1 {
        color: #ffffff;
        }
        data-styled.g42[id="sc-61aeafc1-0"] {
        content: "jFxQA,";
        }
        .iieInv {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        }
        data-styled.g43[id="sc-61aeafc1-1"] {
        content: "iieInv,";
        }
        .giqdPr {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: flex-start;
        -webkit-box-align: flex-start;
        -ms-flex-align: flex-start;
        align-items: flex-start;
        padding: 2rem;
        }
        @media (min-width: 1024px) {
        .giqdPr {
        width: 100%;
        max-width: 80rem;
        padding: 7.5rem 2rem 5.625rem;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        box-sizing: content-box;
        }
        }
        data-styled.g44[id="sc-61aeafc1-2"] {
        content: "giqdPr,";
        }
        .hbqeGV {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        margin: 2.0625rem 0rem;
        }
        @media (min-width: 1024px) {
        .hbqeGV {
        width: 8rem;
        margin: 0;
        }
        }
        data-styled.g45[id="sc-61aeafc1-3"] {
        content: "hbqeGV,";
        }
        .foYdez {
        font-family: "Poppins", "Helvetica", sans-serif;
        color: #ffffff;
        font-size: 1rem;
        font-weight: 600;
        margin: 0;
        padding-bottom: 0.9375rem;
        margin-bottom: 0.9375rem;
        border-bottom: 0.0625rem solid hsla(0, 0%, 100%, 0.3);
        }
        @media (min-width: 1024px) {
        .foYdez {
        font-size: 0.75rem;
        padding-bottom: 0;
        margin-bottom: 2.5rem;
        border-bottom: 0;
        }
        }
        data-styled.g46[id="sc-61aeafc1-4"] {
        content: "foYdez,";
        }
        .crWvgb {
        padding: 0;
        margin: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        }
        data-styled.g47[id="sc-61aeafc1-5"] {
        content: "crWvgb,";
        }
        .yYEER {
        display: block;
        -webkit-flex: 50%;
        -ms-flex: 50%;
        flex: 50%;
        }
        @media (min-width: 1024px) {
        .yYEER {
        -webkit-flex: 100%;
        -ms-flex: 100%;
        flex: 100%;
        }
        }
        data-styled.g48[id="sc-61aeafc1-6"] {
        content: "yYEER,";
        }
        .eEFZpN {
        display: block;
        font-family: "Inter", "Helvetica", sans-serif;
        font-size: 0.875rem;
        line-height: 1.65625rem;
        -webkit-text-decoration: none;
        text-decoration: none;
        color: #ffffff;
        padding: 0.625rem;
        margin-left: -0.625rem;
        }
        @media (min-width: 1024px) {
        .eEFZpN {
        font-size: 0.75rem;
        line-height: 1rem;
        padding: 0rem 0.625rem 0.9375rem;
        }
        .eEFZpN:hover {
        -webkit-text-decoration: underline;
        text-decoration: underline;
        }
        }
        data-styled.g49[id="sc-61aeafc1-7"] {
        content: "eEFZpN,";
        }
        .hwbFyg {
        background-color: #2a4ecc;
        padding: 2rem;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        }
        data-styled.g50[id="sc-61aeafc1-8"] {
        content: "hwbFyg,";
        }
        .dHPkbZ {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 100%;
        max-width: 80rem;
        box-sizing: content-box;
        font-family: "Inter", "Helvetica", sans-serif;
        font-size: 0.75rem;
        color: #ffffff;
        }
        data-styled.g51[id="sc-61aeafc1-9"] {
        content: "dHPkbZ,";
        }
        .jShoGL {
        font-size: 0.75rem;
        line-height: 1.125rem;
        font-style: italic;
        }
        data-styled.g52[id="sc-61aeafc1-10"] {
        content: "jShoGL,";
        }
        .ub-emb-bar .ub-emb-bar-frame {
        position: absolute !important;
        top: 0;
        -webkit-transition: top 300ms ease-in-out;
        transition: top 300ms ease-in-out;
        }
        html {
        margin-top: 0;
        -webkit-transition: none;
        transition: none;
        }
        data-styled.g54[id="sc-global-fpXDqJ1"] {
        content: "sc-global-fpXDqJ1,";
        }
        .kgIHxS {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 17;
        box-shadow: 0 1.25rem 2.5rem rgba(0, 0, 0, 0.05);
        }
        data-styled.g55[id="sc-e4f89e48-0"] {
        content: "kgIHxS,";
        }
        .dJsZfW {
        display: block;
        }
        @media (min-width: 1280px) {
        .dJsZfW {
        display: none;
        }
        }
        data-styled.g56[id="sc-e4f89e48-1"] {
        content: "dJsZfW,";
        }
        .dEtoxB {
        display: none;
        }
        @media (min-width: 1280px) {
        .dEtoxB {
        display: block;
        }
        }
        data-styled.g57[id="sc-e4f89e48-2"] {
        content: "dEtoxB,";
        }
        .gvGXlw {
        background-color: #eef0f5;
        }
        @media (min-width: 1024px) {
        .gvGXlw {
        border-bottom: 1px solid #caccd6;
        }
        }
        data-styled.g58[id="sc-e4f89e48-3"] {
        content: "gvGXlw,";
        }
        .grfYMP {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        height: 2.75rem;
        background-color: #eef0f5;
        position: -webkit-sticky;
        position: sticky;
        z-index: 20;
        }
        @media (min-width: 480px) {
        .grfYMP {
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        }
        }
        @media (min-width: 1440px) {
        .grfYMP {
        max-width: 90rem;
        width: 100%;
        margin: 0 auto;
        padding-left: 1.875rem;
        padding-right: 1.875rem;
        }
        }
        data-styled.g59[id="sc-e4f89e48-4"] {
        content: "grfYMP,";
        }
        .Upxgb {
        -webkit-text-decoration: none;
        text-decoration: none;
        padding: 0.5rem 1.5625rem;
        width: 100%;
        max-width: 5.8125rem;
        height: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        }
        data-styled.g60[id="sc-e4f89e48-5"] {
        content: "Upxgb,";
        }
        .chGomQ {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 50%;
        height: 100%;
        text-align: center;
        -webkit-text-decoration: none;
        text-decoration: none;
        font-size: 0.875rem;
        font-weight: 600;
        -webkit-letter-spacing: 1px;
        -moz-letter-spacing: 1px;
        -ms-letter-spacing: 1px;
        letter-spacing: 1px;
        position: relative;
        }
        @media (min-width: 480px) {
        .chGomQ {
        width: 5.8125rem;
        }
        .chGomQ:first-child {
        border-right: none;
        border-bottom: none;
        }
        .chGomQ:last-child {
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        }
        }
        .chGomQ .sc-e4f89e48-5 {
        color: #000000;
        }
        .chGomQ:first-child {
        background-color: #ffffff;
        border-right: none;
        border-bottom: none;
        }
        @media (min-width: 480px) {
        }
        @media (min-width: 1024px) {
        .chGomQ:first-child {
        height: 102%;
        }
        @media (min-width: 1440px) {
        .chGomQ:first-child {
        border-left: 1px solid #caccd6;
        }
        }
        }
        .chGomQ:last-child {
        background-color: #eef0f5;
        border-left: 1px solid #caccd6;
        }
        @media (max-width: 1024px) {
        .chGomQ:last-child {
        border-bottom: 1px solid #caccd6;
        }
        }
        @media (min-width: 480px) {
        .chGomQ:last-child {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        }
        .chGomQ:last-child:hover .sc-e4f89e48-5 {
        color: #3561ff;
        }
        .chGomQ:last-child:hover::after {
        font-family: "Inter", "Helvetica", sans-serif;
        font-style: italic;
        font-weight: 400;
        font-size: 0.75rem;
        line-height: 1.125rem;
        content: "Designed for high-growth businesses and teams";
        position: absolute;
        display: block;
        left: 6.875rem;
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        }
        }
        data-styled.g61[id="sc-e4f89e48-6"] {
        content: "chGomQ,";
        }
        .bBXnsQ {
        margin-left: 0.625rem;
        color: #000000;
        background-color: transparent;
        border: none;
        padding: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-top: 0.125rem;
        }
        @media (min-width: 1280px) {
        .bBXnsQ {
        color: #000000;
        }
        }
        data-styled.g62[id="sc-7be08f33-0"] {
        content: "bBXnsQ,";
        }
        .eayngM {
        font-family: "Inter", "Helvetica", sans-serif;
        font-weight: 600;
        font-size: 0.875rem;
        -webkit-text-decoration: none;
        text-decoration: none;
        -webkit-letter-spacing: 0.01625rem;
        -moz-letter-spacing: 0.01625rem;
        -ms-letter-spacing: 0.01625rem;
        letter-spacing: 0.01625rem;
        line-height: 1;
        white-space: nowrap;
        color: #000000;
        }
        data-styled.g63[id="sc-7be08f33-1"] {
        content: "eayngM,";
        }
        .dfVumi {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        position: relative;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-text-decoration: none;
        text-decoration: none;
        overflow: hidden;
        cursor: pointer;
        padding: 1.125rem 1.3125rem;
        height: 3.25rem;
        border-radius: 0.1875rem;
        background-color: #2a4ecc;
        }
        @media (min-width: 1280px) {
        .dfVumi {
        -webkit-transition: background-color 0.2s ease-in-out;
        transition: background-color 0.2s ease-in-out;
        }
        }
        .dfVumi .sc-7be08f33-1,
        .dfVumi .sc-7be08f33-0 {
        color: #ffffff;
        }
        .dfVumi:hover,
        .dfVumi:focus {
        background-color: #1336b2;
        }
        .gZNWol {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        position: relative;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-text-decoration: none;
        text-decoration: none;
        overflow: hidden;
        cursor: pointer;
        height: 4.75rem;
        color: #000000;
        padding: 1.875rem;
        }
        .gZNWol .sc-7be08f33-1 {
        color: #000000;
        font-size: 0.875rem;
        }
        .gZNWol:after {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 0.1875rem;
        bottom: 0;
        left: 0;
        background-color: #2a4ecc;
        -webkit-transition: -webkit-transform 0.3s ease;
        -webkit-transition: transform 0.3s ease;
        transition: transform 0.3s ease;
        -webkit-transform: scaleY(0);
        -ms-transform: scaleY(0);
        transform: scaleY(0);
        -webkit-transform-origin: bottom;
        -ms-transform-origin: bottom;
        transform-origin: bottom;
        }
        @media (min-width: 1280px) {
        .gZNWol:hover .sc-7be08f33-1,
        .gZNWol:focus .sc-7be08f33-1,
        .gZNWol:hover .sc-7be08f33-0,
        .gZNWol:focus .sc-7be08f33-0 {
        color: #2a4ecc;
        }
        .gZNWol:hover:after,
        .gZNWol:focus:after {
        -webkit-transform: scaleY(1);
        -ms-transform: scaleY(1);
        transform: scaleY(1);
        }
        }
        data-styled.g64[id="sc-7be08f33-2"] {
        content: "dfVumi,gZNWol,";
        }
        .dKJSXj {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        }
        .lnavRa {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        }
        @media (min-width: 1280px) {
        .lnavRa {
        border-right: 0.03125rem solid #eef0f5;
        }
        }
        data-styled.g65[id="sc-7be08f33-3"] {
        content: "dKJSXj,lnavRa,";
        }
        .jtKNUM {
        visibility: hidden;
        opacity: 0;
        max-height: 0;
        pointer-events: none;
        -webkit-transition: opacity 0.3s 0s ease, visibility 0s 0.3s ease,
        max-height 0.3s 0.3s ease;
        transition: opacity 0.3s 0s ease, visibility 0s 0.3s ease,
        max-height 0.3s 0.3s ease;
        }
        @media (min-width: 1280px) {
        .jtKNUM {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        position: absolute;
        bottom: -0.0625rem;
        left: 0;
        -webkit-transform: translateY(100%);
        -ms-transform: translateY(100%);
        transform: translateY(100%);
        }
        }
        data-styled.g67[id="sc-39599f36-1"] {
        content: "jtKNUM,";
        }
        .icRBuu {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        }
        @media (min-width: 1280px) {
        .icRBuu {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        }
        .icRBuu:hover .sc-39599f36-1 {
        visibility: visible;
        opacity: 1;
        pointer-events: auto;
        max-height: 50rem;
        -webkit-transition: opacity 0.3s 0s ease, visibility 0s ease,
        max-height 0.3s ease;
        transition: opacity 0.3s 0s ease, visibility 0s ease,
        max-height 0.3s ease;
        }
        }
        data-styled.g68[id="sc-39599f36-2"] {
        content: "icRBuu,";
        }
        .cdDtFR {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: flex-start;
        -webkit-box-align: flex-start;
        -ms-flex-align: flex-start;
        align-items: flex-start;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        padding: 0.625rem 0.3125rem;
        }
        data-styled.g69[id="sc-d843308a-0"] {
        content: "cdDtFR,";
        }
        .iHMKgd {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        }
        @media (min-width: 1280px) {
        .iHMKgd {
        -webkit-transition: background-color 0.3s ease;
        transition: background-color 0.3s ease;
        border-radius: 0.3125rem;
        }
        .iHMKgd:hover,
        .iHMKgd:focus-visible {
        background-color: #def5ff;
        border-radius: 0.3125rem;
        cursor: pointer;
        }
        }
        data-styled.g70[id="sc-d843308a-1"] {
        content: "iHMKgd,";
        }
        .lazQkX {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-text-decoration: none;
        text-decoration: none;
        padding: 0.25rem;
        color: #000000;
        }
        @media (min-width: 1280px) {
        .lazQkX {
        color: #000000;
        }
        }
        data-styled.g71[id="sc-d843308a-2"] {
        content: "lazQkX,";
        }
        .dXUnlI {
        display: none;
        border: none;
        background-color: transparent;
        }
        @media (min-width: 1280px) {
        .dXUnlI {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        }
        }
        data-styled.g72[id="sc-d843308a-3"] {
        content: "dXUnlI,";
        }
        .jIVUdI {
        margin-right: 1rem;
        }
        data-styled.g73[id="sc-d843308a-4"] {
        content: "jIVUdI,";
        }
        .pnFKv {
        font-family: "Inter", "Helvetica", sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 1rem;
        line-height: 1.25rem;
        }
        @media (min-width: 1280px) {
        .pnFKv {
        font-size: 1rem;
        line-height: 1.25rem;
        }
        }
        data-styled.g74[id="sc-d843308a-5"] {
        content: "pnFKv,";
        }
        .dEZsZg {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding: 0;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        }
        @media (min-width: 1280px) {
        .dEZsZg {
        margin-left: -0.5rem;
        }
        }
        data-styled.g75[id="sc-8fe9a3b8-0"] {
        content: "dEZsZg,";
        }
        .gWplYd {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        padding: 0rem 2.625rem;
        margin: 0rem -2.625rem;
        }
        @media (min-width: 1280px) {
        .gWplYd {
        padding: 0.9375rem 0rem;
        border: none;
        margin: 0;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        background-color: #ffffff;
        box-shadow: 0 1.25rem 2.5rem #00000026;
        }
        }
        data-styled.g76[id="sc-8fe9a3b8-1"] {
        content: "gWplYd,";
        }
        @media (min-width: 1280px) {
        .bQcjFp {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        -webkit-transform: translateX(100%) scaleX(0);
        -ms-transform: translateX(100%) scaleX(0);
        transform: translateX(100%) scaleX(0);
        -webkit-transform-origin: left;
        -ms-transform-origin: left;
        transform-origin: left;
        background-color: #ffffff;
        opacity: 0;
        visibility: hidden;
        border-left: 0.0625rem solid #eef0f5;
        -webkit-transition: opacity 0.2s 0.3s ease, visibility 0s 0.5s ease,
        -webkit-transform 0.2s 0.3s ease;
        -webkit-transition: opacity 0.2s 0.3s ease, visibility 0s 0.5s ease,
        transform 0.2s 0.3s ease;
        transition: opacity 0.2s 0.3s ease, visibility 0s 0.5s ease,
        transform 0.2s 0.3s ease;
        }
        .bQcjFp:hover {
        opacity: 1;
        visibility: visible;
        -webkit-transform: translateX(100%) scaleX(1);
        -ms-transform: translateX(100%) scaleX(1);
        transform: translateX(100%) scaleX(1);
        -webkit-transition: opacity 0.3s 0s ease, visibility 0s 0s ease,
        -webkit-transform 0.2s ease;
        -webkit-transition: opacity 0.3s 0s ease, visibility 0s 0s ease,
        transform 0.2s ease;
        transition: opacity 0.3s 0s ease, visibility 0s 0s ease,
        transform 0.2s ease;
        }
        }
        @media (min-width: 1280px) {
        .bQcjFp .sc-8fe9a3b8-1 {
        height: 100%;
        box-shadow: 1.25rem 1.25rem 2.5rem #00000026;
        }
        }
        data-styled.g77[id="sc-8fe9a3b8-2"] {
        content: "bQcjFp,";
        }
        .glrhps {
        padding: 0rem 2rem;
        margin: 0rem -2rem;
        }
        @media (min-width: 1280px) {
        .glrhps:hover .sc-8fe9a3b8-2 {
        opacity: 1;
        visibility: visible;
        -webkit-transform: translateX(100%) scaleX(1);
        -ms-transform: translateX(100%) scaleX(1);
        transform: translateX(100%) scaleX(1);
        -webkit-transition: opacity 0.3s 0s ease, visibility 0s 0s ease,
        -webkit-transform 0.2s ease;
        -webkit-transition: opacity 0.3s 0s ease, visibility 0s 0s ease,
        transform 0.2s ease;
        transition: opacity 0.3s 0s ease, visibility 0s 0s ease,
        transform 0.2s ease;
        }
        }
        data-styled.g78[id="sc-8fe9a3b8-3"] {
        content: "glrhps,";
        }
        .cgXqYr {
        width: 100%;
        padding: 1rem 0.8125rem 1rem;
        }
        .cgXqYr:first-child {
        border-left: 0;
        border-top: 0;
        }
        @media (min-width: 1280px) {
        .cgXqYr {
        padding: 0.9375rem 2rem;
        width: 25.625rem;
        border-top: 0;
        border-left: 0.0625rem solid #eef0f5;
        }
        }
        .cgZATS {
        width: 100%;
        padding: 1rem 0.8125rem 1rem;
        }
        .cgZATS:first-child {
        border-left: 0;
        border-top: 0;
        }
        @media (min-width: 1280px) {
        .cgZATS {
        padding: 0.9375rem 2rem;
        width: 18.125rem;
        border-top: 0;
        border-left: 0.0625rem solid #eef0f5;
        }
        }
        data-styled.g79[id="sc-8fe9a3b8-4"] {
        content: "cgXqYr,cgZATS,";
        }
        .bjwtIJ {
        display: block;
        font-family: "Inter", "Helvetica", sans-serif;
        font-size: 0.9375rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #2a4ecc;
        }
        @media (min-width: 1280px) {
        .bjwtIJ {
        color: #2a4ecc;
        }
        }
        data-styled.g80[id="sc-8fe9a3b8-5"] {
        content: "bjwtIJ,";
        }
        .cBtNfn {
        padding: 1.5625rem 0rem;
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        }
        @media (min-width: 1280px) {
        .cBtNfn {
        padding: 1.5625rem 1.875rem;
        }
        }
        data-styled.g81[id="sc-d8c75015-0"] {
        content: "cBtNfn,";
        }
        .jPXEJQ {
        background-color: #ffffff;
        border-bottom: 0.0625rem solid #eef0f5;
        }
        @media (min-width: 1024px) {
        .jPXEJQ .sc-d8c75015-0 {
        border-right: 0.03125rem solid #eef0f5;
        }
        }
        data-styled.g82[id="sc-d8c75015-1"] {
        content: "jPXEJQ,";
        }
        .cNUMBJ {
        max-width: 90rem;
        width: 100%;
        margin: 0 auto;
        padding-left: 1.875rem;
        padding-right: 1.875rem;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 0;
        }
        data-styled.g83[id="sc-d8c75015-2"] {
        content: "cNUMBJ,";
        }
        .kAbTxW {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: stretch;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        }
        data-styled.g84[id="sc-d8c75015-3"] {
        content: "kAbTxW,";
        }
        .huwHJu {
        padding: 0;
        margin: 0;
        }
        data-styled.g85[id="sc-d8c75015-4"] {
        content: "huwHJu,";
        }
        .bGYYud {
        padding: 0rem 2rem;
        margin: 0;
        }
        data-styled.g86[id="sc-d8c75015-5"] {
        content: "bGYYud,";
        }
        .fkjSqV {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        z-index: 17;
        }
        data-styled.g87[id="sc-a489d267-0"] {
        content: "fkjSqV,";
        }
        .cQOLxF {
        position: relative;
        height: 4.75rem;
        min-width: 11.25rem;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: right;
        -webkit-justify-content: right;
        -ms-flex-pack: right;
        justify-content: right;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        overflow: hidden;
        margin: 0;
        padding: 0;
        z-index: 17;
        }
        data-styled.g91[id="sc-a489d267-4"] {
        content: "cQOLxF,";
        }
        .dhdlxZ {
        position: absolute;
        margin: 0;
        padding: 0;
        top: 0.8125rem;
        right: 0.8125rem;
        }
        data-styled.g92[id="sc-a489d267-5"] {
        content: "dhdlxZ,";
        }
        .fOWnvP {
        color: transparent;
        }
        data-styled.g93[id="sc-a489d267-6"] {
        content: "fOWnvP,";
        }
        .dIjMnU {
        border: none;
        padding: 0;
        position: relative;
        background-color: transparent;
        width: 1.5rem;
        margin: 0.75rem 1rem 1rem;
        height: 1.25rem;
        }
        .dIjMnU .sc-a489d267-6:before {
        content: "";
        display: block;
        position: absolute;
        width: 1.5rem;
        height: 0.0625rem;
        left: 0;
        -webkit-transition: top 0.3s ease;
        transition: top 0.3s ease;
        background-color: #000000;
        top: 0.625rem;
        }
        .dIjMnU:before {
        content: "";
        display: block;
        position: absolute;
        width: 1.5rem;
        height: 0.0625rem;
        left: 0;
        -webkit-transition: top 0.3s ease;
        transition: top 0.3s ease;
        background-color: #000000;
        top: 0;
        }
        .dIjMnU:after {
        content: "";
        display: block;
        position: absolute;
        width: 1.5rem;
        height: 0.0625rem;
        left: 0;
        -webkit-transition: top 0.3s ease;
        transition: top 0.3s ease;
        background-color: #000000;
        top: 1.25rem;
        }
        data-styled.g94[id="sc-a489d267-7"] {
        content: "dIjMnU,";
        }
        .bzjiPY {
        padding: 1.5625rem 0rem;
        }
        @media (min-width: 1280px) {
        .bzjiPY {
        padding: 1.5625rem 1.875rem;
        }
        }
        data-styled.g96[id="sc-a489d267-9"] {
        content: "bzjiPY,";
        }
        .fEWqgI {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 0;
        background-color: #ffffff;
        border-bottom: 0.0625rem solid #eef0f5;
        }
        data-styled.g97[id="sc-a489d267-10"] {
        content: "fEWqgI,";
        }
        .iZKVJC {
        background-color: #ffffff;
        width: 100%;
        margin: 0 auto;
        }
        data-styled.g98[id="sc-c222699b-0"] {
        content: "iZKVJC,";
        }



        .kEsmRN p,
        .kEsmRN a {
        font-family: "Inter", "Helvetica", sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 1rem;
        line-height: 1.25rem;
        font-family: "Inter", "Helvetica", sans-serif;
        color: #000000;
        margin: 0;
        }
        @media (min-width: 1280px) {
        .kEsmRN p,
        .kEsmRN a {
        font-size: 1.125rem;
        line-height: 1.5rem;
        }
        }
        .kEsmRN a {
        -webkit-text-decoration: underline;
        text-decoration: underline;
        }
        .kEsmRN a:hover {
        color: #2a4ecc;
        }
        data-styled.g119[id="sc-3d70d384-2"] {
        content: "kEsmRN,";
        }
        .eEFqXS {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-bottom: 1.5rem;
        text-align: default;
        -webkit-align-items: flex-start;
        -webkit-box-align: flex-start;
        -ms-flex-align: flex-start;
        align-items: flex-start;
        }
        .eEFqXS .sc-3d70d384-1 {
        max-width: 50.3125rem;
        }
        .eEFqXS .sc-3d70d384-2 {
        max-width: 50.3125rem;
        }
        .eEFqXS .sc-3d70d384-3 {
        -webkit-align-self: flex-start;
        -ms-flex-item-align: start;
        align-self: flex-start;
        }
        @media (min-width: 1024px) {
        .eEFqXS .sc-3d70d384-3 {
        -webkit-align-self: flex-end;
        -ms-flex-item-align: end;
        align-self: flex-end;
        position: absolute;
        bottom: 0;
        -webkit-transform: translateY(-1.5rem);
        -ms-transform: translateY(-1.5rem);
        transform: translateY(-1.5rem);
        margin-top: 0;
        }
        }
        data-styled.g121[id="sc-3d70d384-4"] {
        content: "eEFqXS,";
        }
        .iSFYAO {
        position: relative;
        height: 100%;
        width: 100%;
        max-width: 100%;
        max-height: 100%;
        border-radius: 0;
        overflow: hidden;
        }
        .cbHsup {
        position: relative;
        height: 100%;
        width: 100%;
        max-width: 100%;
        max-height: 100%;
        border-radius: 1.875rem;
        overflow: hidden;
        }
        .hUMMZY {
        position: relative;
        height: 22.1875rem;
        width: 40.625rem;
        max-width: 100%;
        max-height: 100%;
        border-radius: 0;
        overflow: hidden;
        }
        .dJFCgn {
        position: relative;
        height: 25.25rem;
        width: 40.625rem;
        max-width: 100%;
        max-height: 100%;
        border-radius: 0;
        overflow: hidden;
        }
        data-styled.g122[id="sc-5b70de73-0"] {
        content: "iSFYAO,cbHsup,hUMMZY,dJFCgn,";
        }
        .kFkwas {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        }
        data-styled.g123[id="sc-5b70de73-1"] {
        content: "kFkwas,";
        }
        .eztcHT {
        font-size: 0.875rem;
        font-weight: 600;
        line-height: 1.375rem;
        color: #666e7d;
        }
        data-styled.g322[id="sc-cf349e35-0"] {
        content: "eztcHT,";
        }
        .ifZvaG {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-flow: row wrap;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        margin-top: 1.25rem;
        gap: 6%;
        }
        @media (min-width: 768px) {
        .ifZvaG {
        gap: 4%;
        }
        }
        data-styled.g323[id="sc-cf349e35-1"] {
        content: "ifZvaG,";
        }
        .haZKsc {
        max-width: 6.25rem;
        max-height: none;
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        -webkit-flex-basis: 29.33%;
        -ms-flex-preferred-size: 29.33%;
        flex-basis: 29.33%;
        }
        @media (min-width: 768px) {
        .haZKsc {
        -webkit-flex-basis: 15.4%;
        -ms-flex-preferred-size: 15.4%;
        flex-basis: 15.4%;
        }
        }
        data-styled.g324[id="sc-cf349e35-2"] {
        content: "haZKsc,";
        }
        .hUFXGl {
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
        }
        data-styled.g325[id="sc-cf349e35-3"] {
        content: "hUFXGl,";
        }
        .cOENCj {
        max-width: 100%;
        padding-top: 1.875rem;
        }
        @media (min-width: 1024px) {
        .cOENCj {
        max-width: 45%;
        }
        }
        data-styled.g655[id="sc-899bc826-0"] {
        content: "cOENCj,";
        }
        .uYmEb {
        font-family: "Poppins", "Helvetica", sans-serif;
        color: #000000;
        font-size: 1.5rem;
        line-height: 2rem;
        margin: 0rem 0rem 1.5625rem;
        }
        @media (min-width: 1024px) {
        .uYmEb {
        font-weight: 400;
        font-size: 2rem;
        line-height: 2.375rem;
        }
        }
        data-styled.g657[id="sc-899bc826-2"] {
        content: "uYmEb,";
        }
        .bEoNPz p,
        .bEoNPz a {
        font-family: "Inter", "Helvetica", sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 1rem;
        line-height: 1.25rem;
        font-family: "Inter", "Helvetica", sans-serif;
        color: #000000;
        margin: 0rem 0rem 1.5625rem;
        }
        @media (min-width: 1280px) {
        .bEoNPz p,
        .bEoNPz a {
        font-size: 1.125rem;
        line-height: 1.5rem;
        }
        }
        .bEoNPz a {
        -webkit-text-decoration: underline;
        text-decoration: underline;
        }
        .bEoNPz a:hover {
        color: #2a4ecc;
        }
        data-styled.g658[id="sc-899bc826-3"] {
        content: "bEoNPz,";
        }
        .glMPnF {
        max-width: 44.375rem;
        width: 100%;
        height: 100%;
        }
        @media (min-width: 1024px) {
        .glMPnF {
        width: 53%;
        }
        }
        data-styled.g660[id="sc-899bc826-5"] {
        content: "glMPnF,";
        }
        .lmRaMs {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 1rem 0rem;
        gap: 0rem;
        }
        @media (min-width: 1024px) {
        .lmRaMs {
        gap: 2.5rem;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        }
        .lmRaMs:nth-child(even) {
        -webkit-flex-direction: row-reverse;
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
        }
        }
        .lmRaMs .sc-b4c78462-3 {
        -webkit-break-inside: avoid;
        break-inside: avoid;
        }
        data-styled.g662[id="sc-899bc826-7"] {
        content: "lmRaMs,";
        }





        data-styled.g670[id="sc-9a047403-5"] {
        content: "ewREjY,";
        }


        data-styled.g673[id="sc-9a047403-8"] {
        content: "hIahtL,";
        }
        .csLfGm {
        background: transparent;
        display: block;
        }
        data-styled.g676[id="sc-7ea5515-0"] {
        content: "csLfGm,";
        }
        .foeSzU {
        max-width: 90rem;
        width: 100%;
        margin: 0 auto;
        padding-left: 1.875rem;
        padding-right: 1.875rem;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
        }
        @media (min-width: 1024px) {
        .foeSzU {
        -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        gap: 3.75rem;
        position: relative;
        overflow: hidden;
        padding-top: 3.75rem;
        padding-bottom: 3.75rem;
        padding: 3.75rem 1.875rem;
        }
        }
        data-styled.g677[id="sc-7ea5515-1"] {
        content: "foeSzU,";
        }
        .fFwbnm {
        margin: 0;
        }
        @media (min-width: 1024px) {
        .fFwbnm {
        max-width: 43.75rem;
        }
        }
        data-styled.g678[id="sc-7ea5515-2"] {
        content: "fFwbnm,";
        }
        .duzeCw {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        margin-top: 1.25rem;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        }
        @media (min-width: 1024px) {
        .duzeCw {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-top: 0;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        max-width: 40rem;
        }
        }

        .eJHoSL {
        line-height: 1.5rem;
        margin: 0 auto;
        }
        .eJHoSL p {
        color: #666e7d;
        }

        .dDzfRi {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        margin: 0 auto;
        }
        @media (min-width: 768px) {
        .dDzfRi {
        width: 80%;
        }
        }
        @media (min-width: 1024px) {
        .dDzfRi {
        width: 60%;
        }
        }
        data-styled.g682[id="sc-32e89945-0"] {
        content: "dDzfRi,";
        }
        .dwDdT {
        font-family: "Poppins", "Helvetica", sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 2rem;
        line-height: 2.375rem;
        -webkit-letter-spacing: -0.0625rem;
        -moz-letter-spacing: -0.0625rem;
        -ms-letter-spacing: -0.0625rem;
        letter-spacing: -0.0625rem;
        color: #000000;
        text-align: center;
        }
        @media (min-width: 1280px) {
        .dwDdT {
        font-size: 2.625rem;
        line-height: 3.125rem;
        }
        }
        data-styled.g683[id="sc-32e89945-1"] {
        content: "dwDdT,";
        }
        .lmpcWf {
        display: block;
        font-family: "Inter", "Helvetica", sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 1rem;
        line-height: 1.25rem;
        color: #000000;
        text-align: center;
        }
        @media (min-width: 1280px) {
        .lmpcWf {
        font-size: 1.125rem;
        line-height: 1.5rem;
        }
        }
        data-styled.g684[id="sc-32e89945-2"] {
        content: "lmpcWf,";
        }
        .fejKFM {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: 25rem;
        padding: 4.6875rem 2.3125rem;
        background: url(https://www.thinkific.com/_next/static/media/journeyLine-mobile.6207165f.svg)
        no-repeat center 95%,
        linear-gradient(180deg, #def5ff 0%, #ffffff 100%);
        background-size: contain;
        }
        @media (min-width: 768px) {
        .fejKFM {
        height: 32.25rem;
        background: url(https://www.thinkific.com/_next/static/media/journeyLine.e978cb4f.svg)
        no-repeat center 82%,
        linear-gradient(180deg, #def5ff 0%, #ffffff 100%);
        background-size: contain;
        }
        }
        .fejKFM .sc-32e89945-1 {
        margin: 0rem 0rem 1.875rem;
        }
        @media (min-width: 768px) {
        .fejKFM .sc-32e89945-1 {
        font-size: 3.25rem;
        line-height: 3.75rem;
        }
        }
        .fejKFM .sc-32e89945-2 {
        line-height: 1.375rem;
        font-weight: 400;
        margin: 0;
        }
        .fejKFM .sc-32e89945-4 {
        padding: 1rem;
        margin-top: 1.625rem;
        width: 100%;
        }
        @media (min-width: 768px) {
        .fejKFM .sc-32e89945-4 {
        width: 45%;
        }
        }
        .ifPiRP {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        max-width: 90rem;
        width: 100%;
        margin: 0 auto;
        padding-left: 1.875rem;
        padding-right: 1.875rem;
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
        }
        @media (min-width: 1024px) {
        .ifPiRP {
        padding-top: 3.75rem;
        padding-bottom: 3.75rem;
        }
        }
        .ifPiRP .sc-32e89945-0 {
        width: 100%;
        -webkit-align-items: flex-start;
        -webkit-box-align: flex-start;
        -ms-flex-align: flex-start;
        align-items: flex-start;
        padding: 0;
        }
        @media (min-width: 1024px) {
        .ifPiRP .sc-32e89945-0 {
        gap: 1.875rem 2%;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-align-items: flex-start;
        -webkit-box-align: flex-start;
        -ms-flex-align: flex-start;
        align-items: flex-start;
        }
        }
        .ifPiRP .sc-32e89945-1 {
        color: #000000;
        text-align: left;
        margin: 0;
        }
        @media (min-width: 1024px) {
        .ifPiRP .sc-32e89945-1 {
        width: 100%;
        margin-right: 0;
        }
        }
        .ifPiRP .sc-32e89945-4 {
        width: unset;
        }
        @media (max-width: 1024px) {
        .ifPiRP .sc-32e89945-4 {
        margin: 1rem 0rem 0rem;
        }
        }
        data-styled.g688[id="sc-32e89945-6"] {
        content: "fejKFM,ifPiRP,";
        }
        .ezpuYg {
        max-width: 90rem;
        width: 100%;
        margin: 0 auto;
        padding-left: 1.875rem;
        padding-right: 1.875rem;
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
        }
        @media (min-width: 1024px) {
        .ezpuYg {
        padding-top: 3.75rem;
        padding-bottom: 3.75rem;
        }
        }
        data-styled.g779[id="sc-a44eb16d-0"] {
        content: "ezpuYg,";
        }
        .kvTBnT {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        gap: 1.25rem;
        margin-top: 1.25rem;
        }
        @media (min-width: 768px) {
        .kvTBnT {
        gap: 2.5rem;
        }
        }
        data-styled.g780[id="sc-a44eb16d-1"] {
        content: "kvTBnT,";
        }
        .jCHvMw {
        display: block;
        background-color: #fffaf5;
        }
        data-styled.g781[id="sc-a44eb16d-2"] {
        content: "jCHvMw,";
        }
        @-webkit-keyframes dvoAGX {
        100% {
        -webkit-transform: translateX(100%);
        -ms-transform: translateX(100%);
        transform: translateX(100%);
        }
        }
        @keyframes dvoAGX {
        100% {
        -webkit-transform: translateX(100%);
        -ms-transform: translateX(100%);
        transform: translateX(100%);
        }
        }
        data-styled.g789[id="sc-keyframes-dvoAGX"] {
        content: "dvoAGX,";
        }
    @endpush

@section('content')
    <style>
        .section-header {
            background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
            color: white !important;
            padding: 180px 0 40px 0 !important;
            /*margin-top: 120px;*/
            position: relative !important;
            overflow: hidden !important;
        }

        .section-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgb(48 48 48 / 85%), rgba(0, 40, 104, 0.9)),
                url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            z-index: 0;
        }
        
        .section-content {
            padding: 80px 0;
        }
        
        .section-title h2 {
            font-weight: 700;
            color: #fff;
            font-size: 2.5rem;
            margin-bottom: 20px;
            position: relative;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #ff9800;
            border-radius: 2px;
        }
        
        .section-title p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 30px auto 0;
            color: #fff;
            opacity: 0.9;
        }
    </style>
    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title text-center position-relative">
                        <h2>We're your launchpad to a thriving career in Data Science, AI, and Business Technology</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="sc-c222699b-1 bjJwXs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-column">

                    <h4 class="h4 mt-3 mt-lg-4 pt-lg-2">
                        About YouExcel
                    </h4>
                    <p class="mt-3 mt-lg-4 pt-lg-2">
                        YouExcel, established in 2019, is a leading Data Science, AI, and Business Technology training institute in Pakistan, committed to developing industry-ready talent and strengthening organizational capabilities through practical, high-impact learning programs.

                    </p>

                </div>
                <div class="col-md-12 d-flex flex-column">

                    <h4 class="h4 mt-3 mt-lg-4 pt-lg-2">
                        Our Vision
                    </h4>
                    <p class="mt-3 mt-lg-4 pt-lg-2">
                        YouExcel envisions to bridge the gap between education and employment by preparing a job-ready workforce aligned with evolving technological and business requirements.

                    </p>

                </div>
            </div>




            <div class="row gx-60 py-3">
                <div class="col-xl-6 mb-4 mb-lg-0">
                    <h3 class="h4 mb-3 mb-lg-4 pb-lg-2">Our Mission</h3>
                    <p> YouExcel empowers individuals and organizations to thrive in the evolving technology landscape by: </p>
                    <br>
                    <div class="vs-list list-style3">
                        <ul>
                            <li><a href="#"><b>Equipping fresh graduates</b> with practical skills and professional competencies required for modern data-driven careers.</a></li>
                            <li><a href="#"><b>Upskilling professionals</b> to remain relevant and effective in an increasingly technology-enabled business environment.</a></li>
                            <li><a href="#"><b>Partnering with organizations</b> and institutions to build future-ready workforce aligned with industry needs.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <h3 class="h4 mb-3 mb-lg-4 pb-lg-2">Why YouExcel?</h3>
                    <div class="row gx-3 pt-1">
                        <div class="col-md-12">
                            <p>
                                YouExcel offers a comprehensive approach to Data Science, AI & Business Technology skills, focusing on preparing participants academically, practically and professionally for the industry.</p>

                            <div class="vs-list list-style3 mt-3">
                                <ul>
                                    <li><a href="#"> <b>Real-world Focus: </b> Our training programs are designed by
                                            Data Science, AI & Business Technology experts and reflect the latest industry trends and technologies.</a>
                                    </li>
                                    <li><a href="#"><b>Practical Learning:</b> We go beyond theory, providing hands-on
                                            simulation based experience with industry-standard tools and software.</a></li>
                                    <li><a href="#"><b>Career Support:</b> We equip you with the skills and confidence
                                            to land your dream Data Science, AI & Business Technology job.</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!--<div class="col-xl-6">-->

                <!--    <h3 class="about-heading">Step Into Excellence by Empowering yourself with skills</h3>-->

                    <!--<div class="img-1 mega-hover"> <img src="{{ asset('img/excel_skill123.jpeg') }}" alt=""></div>-->
                    <!--<div class="shape-dotted jump"></div>-->
                <!--    <div class=" text-center">-->
                <!--        <a href="{{ route('download.company_profile') }}" class="vs-btn style3 mt-3 d-inline-flex align-items-center">-->
                <!--            Download Company Profile-->
                <!--            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down ms-2" viewBox="0 0 16 16">-->
                <!--                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v10.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 12.293V1.5A.5.5 0 0 1 8 1z"/>-->
                <!--            </svg>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

        </div>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="container h-100">
                    <div class="cta-style2 h-100" style="min-height: 350px;">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 h-100">
                                <div class="cta-content d-flex flex-column justify-content-between align-items-center text-center text-md-start p-4">
        
                                    <div>
                                        <h2 class="cta-title h1 text-center">
                                            Step Into Excellence by Empowering yourself with skills
                                        </h2>
                                    </div>
        
                                    <div class="mt-4">
                                        <a href="{{ route('download.company_profile') }}"
                                           class="vs-btn style2">
                                            <i class="fas fa-download"></i>
                                            Download Company Profile
                                        </a>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-md-6 mb-4">
                <div class="container h-100">
                    <div class="cta-style2 h-100" style="min-height: 350px;">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 h-100">
                                <div class="cta-content d-flex flex-column justify-content-between align-items-center text-center text-md-start p-4">
        
                                    <div>
                                        <h2 class="cta-title h1 text-center">
                                            Certified, Experienced Trainers — Dedicated to Helping You Excel at Every Level.
                                        </h2>
                                    </div>
        
                                    <div class="mt-4">
                                        <a href="{{ url('/trainer-profiles') }}"
                                           class="vs-btn style2">
                                            <i class="far fa-angle-right"></i>
                                            View Trainer Profiles
                                        </a>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="signup_cta$0cc10113-bcfc-4e03-ba05-f518195139d6" class="sc-32e89945-6 fejKFM">
            <div class="sc-32e89945-0 dDzfRi">
                <div class="sc-32e89945-5 jqBehU">
                    <h2 class="sc-32e89945-1 dwDdT">Let's help you start or advance your career.</h2>
                    <h3 class="sc-32e89945-2 lmpcWf">
                        <p>
                            Explore our comprehensive training programs and align your career with 21st century in-demand
                            skillset


                        </p>
                    </h3>
                </div>

                <a href="courses" class="sc-1c76b7b1-3 dFXWkm sc-32e89945-4 cEvtcd" aria-disabled="false"><span
                        class="sc-1c76b7b1-2 iioluD">Get Started to View Programs
                    </span><span size="20" class="sc-438c3942-0 CJEic sc-1c76b7b1-0 ixBqOe"><svg width="1em"
                            height="1em" viewBox="0 0 25 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5306 12.5307L10.0306 20.0307C9.96093 20.1004 9.87821 20.1556 9.78716 20.1933C9.69612 20.2311 9.59854 20.2505 9.49999 20.2505C9.40144 20.2505 9.30386 20.2311 9.21282 20.1933C9.12177 20.1556 9.03905 20.1004 8.96936 20.0307C8.89968 19.961 8.84441 19.8783 8.80669 19.7872C8.76898 19.6962 8.74957 19.5986 8.74957 19.5001C8.74957 19.4015 8.76898 19.3039 8.80669 19.2129C8.84441 19.1218 8.89968 19.0391 8.96936 18.9694L15.9397 12.0001L8.96936 5.03068C8.82863 4.88995 8.74957 4.69907 8.74957 4.50005C8.74957 4.30103 8.82863 4.11016 8.96936 3.96943C9.11009 3.8287 9.30097 3.74963 9.49999 3.74963C9.69901 3.74963 9.88988 3.8287 10.0306 3.96943L17.5306 11.4694C17.6003 11.5391 17.6557 11.6218 17.6934 11.7128C17.7312 11.8039 17.7506 11.9015 17.7506 12.0001C17.7506 12.0986 17.7312 12.1962 17.6934 12.2873C17.6557 12.3783 17.6003 12.461 17.5306 12.5307Z">
                            </path>
                        </svg></span></a>
            </div>
        </div>
        
        @include('website.sections.trusted-companies-carousel')


    </main>
@endsection
