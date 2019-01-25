<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue Test Apps</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            .colored{
                background-color: green;
            }
            #container{
                width: 100%;
            }
            .col{
                width: 50%;
                float: left;
            }
        </style>
    </head>
    <body >
        <div id="app">
            <div class="col">
                <myself :remarks="remarks"></myself>
                <h3>Remarks</h3>
                <button
                    type="button"
                    v-for="(remarkOption,index) in remarkOptions"
                    :key="'option'+index"
                    @click="setRemarks(index)"
                >@{{remarkOption}}</button>
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
