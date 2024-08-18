<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<style>
    /* Ratting Css */
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        top: -9999px;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }

    /* Custom Text Editor Css */
    li {
        margin-left: 16px;
    }

    a {
        cursor: pointer;
    }

    .toolbar-container {
        max-width: 991px;
        width: 100%;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
    }

    .toolbar {
        padding: 16px;
        background: #eee;
    }

    .toolbar .head {
        display: flex;
        grid-gap: 10px;
        margin-bottom: 16px;
        flex-wrap: wrap;
    }

    .toolbar .head>input {
        max-width: 100px;
        padding: 6px 10px;
        border-radius: 6px;
        border: 2px solid #ddd;
        outline: none;
    }

    .toolbar .head select {
        background: #fff;
        border: 2px solid #ddd;
        border-radius: 6px;
        outline: none;
        cursor: pointer;
    }

    .toolbar .head .color {
        background: #fff;
        border: 2px solid #ddd;
        border-radius: 6px;
        outline: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        grid-gap: 6px;
        padding: 0 10px;
    }

    .toolbar .head .color span {
        font-size: 14px;
    }

    .toolbar .head .color input {
        border: none;
        padding: 0;
        width: 26px;
        height: 26px;
        background: #fff;
        cursor: pointer;
    }

    .toolbar .head .color input::-moz-color-swatch {
        width: 20px;
        height: 20px;
        border: none;
        border-radius: 50%;
    }

    .toolbar .btn-toolbar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        grid-gap: 10px;
    }

    .toolbar .btn-toolbar button {
        background: #fff;
        border: 2px solid #ddd;
        border-radius: 6px;
        cursor: pointer;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .toolbar .btn-toolbar button:hover {
        background: #f3f3f3;
    }

    #content {
        padding: 16px;
        outline: none;
        max-height: 50vh;
        overflow: auto;
        border: 1px solid #eee;
    }

    #show-code[data-active="true"] {
        background: #eee;
    }
</style>
