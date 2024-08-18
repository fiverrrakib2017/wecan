<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,900");

    #wrapper {
        width: 100%;
    }

    p.warning {
        text-align: center;
        line-height: 2;
    }

    p.warning a {
        background: #B83D7C;
        color: #fff;
        padding: 0.2rem 0.5rem;
        border-radius: 3px;
        white-space: nowrap;
    }

    p.warning a.more {
        background: #45ba04;
    }

    body a {
        text-decoration: none;
        color: #000;
    }

    body p {
        margin-top: 0;
    }

    body div {
        box-sizing: border-box;
    }

    h2 {
        margin: 2em auto 0;
        text-align: center;
    }

    .tabbed-content {
        background: #fff;
        box-shadow: 1px 1px 6px #ccc;
        max-width: 100%;
        padding: 1em;
    }

    .tabs ul {
        margin: 0;
        padding: 0 0 1em 0;
        font-weight: normal;
    }

    .tabs ul li {
        background: #eee;
    }

    .tabs ul li a {
        padding: 0.5em 1em;
    }

    .tabs ul li a:hover,
    .tabs ul li a.active {
        background: #B83D7C;
        color: #eee;
    }

    .item {
        margin-bottom: 2px;
    }

    .item::before {
        cursor: pointer;
        font-weight: bold;
        background: #eee;
        padding: 0.5em;
        display: block;
    }

    .item.active::before {
        background: #444;
        color: #eee;
    }

    .item.active .item-content {
        padding: 1em;
        -webkit-transition: opacity 0.3s ease-in-out;
        -moz-transition: opacity 0.3s ease-in-out;
        -o-transition: opacity 0.3s ease-in-out;
        -ms-transition: opacity 0.3s ease-in-out;
        transition: opacity 0.3s ease-in-out;
    }

    @media all and (min-width: 800px) {
        .item.active .item-content {
            padding-top: 0;
        }

        .tabs-side .tabs li {
            margin-bottom: 2px;
        }
    }

    .tabbed-content .tabs {
        display: none;
    }

    .tabbed-content .item {
        min-height: 2em;
    }

    .tabbed-content .item::before {
        content: attr(data-title);
    }

    .tabbed-content .item .item-content {
        opacity: 0;
        visibility: hidden;
        height: 0;
    }

    .tabbed-content .item.active .item-content {
        opacity: 1;
        visibility: visible;
        height: auto;
    }

    @media all and (min-width: 800px) {
        .tabbed-content .tabs {
            display: block;
        }

        .tabbed-content .tabs li {
            display: inline-block;
        }

        .tabbed-content .tabs li a {
            display: block;
        }

        .tabbed-content .item {
            min-height: 0;
        }

        .tabbed-content .item::before {
            display: none;
        }

        .tabbed-content.tabs-side .tabs {
            width: 270px;
            float: left;
        }

        .tabbed-content.tabs-side .tabs li {
            display: block;
        }

        .tabbed-content.tabs-side .item {
            margin-left: 280px;
        }
    }








    form {
        padding: 20px;
    }

    form h1 {
        padding-bottom: 10px;
        margin-bottom: 25px;
        font-family: "Open Sans";
        font-weight: 100;
        text-align: center;
        color: #B83D7C;
        border-bottom: 1px solid #ccc;
    }

    form .row {
        margin-bottom: 25px;
        position: relative;
        overflow: hidden;
    }

    form input[type=text],
    form input[type=password],
    form textarea {
        width: 100%;
        height: 40px;
        padding: 10px 10px 10px 90px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        color: #333;
        border-radius: 3px;
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
    }

    form textarea {
        height: auto;
        min-height: 200px;
        padding: 50px 10px 10px 10px;
    }

    form input[type=text]+label,
    form input[type=password]+label,
    form textarea+label {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        height: 40px;
        line-height: 40px;
        font-size: 12px;
        font-weight: bold;
        width: 80px;
        text-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: white;
        background: #B83D7C;
        border-radius: 3px 0 0 3px;
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
        transform: translateZ(0) translateX(0);
    }

    form textarea+label {
        width: 100%;
        border-radius: 3px 3px 0 0;
    }

    form input[type=text]:focus,
    form input[type=password]:focus {
        padding-left: 10px;
    }

    form textarea:focus {
        padding-top: 10px;
    }

    form input[type=text]:focus+label,
    form input[type=password]:focus+label {
        transform: translateZ(0) translateX(-100%);
    }

    form textarea:focus+label {
        transform: translateZ(0) translateY(-100%);
    }

    form input[type=checkbox],
    form input[type=radio] {
        position: absolute;
        overflow: hidden;
        clip: rect(0 0 0 0);
        height: 1px;
        width: 1px;
        margin: -1px;
        padding: 0;
    }

    form input[type=radio]+label {
        position: relative;
        display: inline-block;
        overflow: hidden;
        text-indent: -9999px;
        background: #ccc;
        width: 30px;
        height: 30px;
        border-radius: 100%;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
    }

    form input[type=radio]+label:before {
        content: "";
        position: absolute;
        display: block;
        height: 10px;
        width: 10px;
        top: 50%;
        left: 50%;
        background: white;
        border-radius: 100%;
        box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9) 0.1s;
        transform: translateZ(0) translate(-50%, -50%) scale(0);
    }

    form input[type=radio]:checked+label {
        background: #B83D7C;
    }

    form input[type=radio]:checked+label:before {
        transform: translateZ(0) translate(-50%, -50%) scale(1);
    }

    form input[type=checkbox]+label {
        position: relative;
        display: inline-block;
        overflow: hidden;
        text-indent: -9999px;
        background: #ccc;
        width: 60px;
        height: 30px;
        border-radius: 100px;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
    }

    form input[type=checkbox]+label:before {
        content: "";
        position: absolute;
        display: block;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #B83D7C;
        border-radius: 100px;
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9) 0.1s;
        transform: translateZ(0) scale(0);
    }

    form input[type=checkbox]+label:after {
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        display: block;
        height: 26px;
        width: 26px;
        background: white;
        border-radius: 100%;
        box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
        transform: translateZ(0) translateX(0);
    }

    form input[type=checkbox]:checked+label {
        background: #B83D7C;
    }

    form input[type=checkbox]:checked+label:after {
        left: calc(100% - 28px);
        transform: translateZ(0);
    }

    form button {
        position: relative;
        overflow: hidden;
        height: 40px;
        line-height: 40px;
        padding: 0 20px;
        font-size: 12px;
        font-weight: bold;
        text-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: white;
        border: none;
        background: #B83D7C;
        border-radius: 3px;
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
        transform: translateZ(0) translateX(0);
        z-index: 2;
    }

    form button:before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: #B83D7C;
        height: 100%;
        width: 100%;
        border-radius: 3px;
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
        transform: translateZ(0) scale(0);
        z-index: -1;
    }

    form button:hover:before,
    form button:focus:before {
        transform: scale(1);
        transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
    }






    .color-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 250px;
        margin: 0 auto;
    }

    .color-wrapper p {
        margin-bottom: 5px;
    }

    input.call-picker {
        border: 1px solid #AAA;
        color: #666;
        text-transform: uppercase;
        float: left;
        outline: none;
        padding: 10px;
        text-transform: uppercase;
        width: 85px;
    }

    .color-picker {
        width: 130px;
        background: #F3F3F3;
        height: 100px;
        padding: 5px;
        border: 5px solid #fff;
        box-shadow: 0px 0px 3px 1px #DDD;
        position: absolute;
        top: 45px;
        left: 119px;
        z-index: 1;
    }

    .color-holder {
        background: #fff;
        cursor: pointer;
        border: 1px solid #AAA;
        width: 40px;
        height: 36px;
        float: left;
        margin-left: 5px;
    }

    .color-picker .color-item {
        cursor: pointer;
        width: 10px;
        height: 10px;
        list-style-type: none;
        float: left;
        margin: 2px;
        border: 1px solid #DDD;
    }

    .color-picker .color-item:hover {
        border: 1px solid #666;
        opacity: 0.8;
        -moz-opacity: 0.8;
        filter: alpha(opacity=8);
    }
</style>
