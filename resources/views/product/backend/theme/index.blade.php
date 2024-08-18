@extends('layouts.master')
@section('title', 'Theme')
@section('style')
@include('product.backend.theme.partials.style')
@endsection
@section('content')
<!-- Main Dashboard -->
<div id="main-container" class="container">
    @if(session('success'))
    <div class="alert alert-success" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    <div id="app">
        <app-flash></app-flash>
        <div class="page-wrapper products-wrapper is-sticky-bottom" style="padding: 0">
            <div class="page-header" v-on:click="hideTableFilters">
                <div class="page-title">
                    <h1 class="primary-heading">
                        Theme Setting
                    </h1>
                </div>
            </div>
        </div>

        <div class="onboarding-container">
            <div class="store-onboarding">
                <div class="onboarding-block">
                    <div class="checkmark"></div>
                    <div class="content">
                        <span class="title">Verify your email address</span>
                    </div>
                </div>
                <div class="onboarding-block">
                    <div class="checkmark"></div>
                    <div class="content">
                        <span class="title">Activate your store</span>
                        <a href="" class="action">
                            Purchase balance
                        </a>
                    </div>
                </div>
                <div class="onboarding-block">
                    <div class="checkmark "></div>
                    <div class="content">
                        <span class="title">Set a payment method</span>
                        <a href="" class="action">
                            Configure payment methods
                        </a>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
        </div>

        <article class="tabbed-content tabs-side">
            <nav class="tabs">
                <ul>
                    <li><a href="#side_tab1" class="active"><i class="fas fa-cog"></i> Theme settings</a></li>
                    <li><a href="#side_tab2"><i class="fas fa-sliders-h"></i> Header / Footer settings</a></li>
                    <li><a href="#side_tab3"><i class="fas fa-tags"></i> Product settings</a></li>
                    <li><a href="#side_tab4"><i class="fas fa-shopping-cart"></i> Checkout settings</a></li>
                    <li><a href="#side_tab5"><i class="fas fa-suitcase-rolling"></i> Cart bottom banner</a></li>
                    <li><a href="#side_tab6"><i class="fas fa-tv"></i> Homepage settings</a></li>
                </ul>
            </nav>
            <section id="side_tab1" class="item active" data-title="Tab 1">
                <div class="item-content outer-block collapsed-block" style="padding: 0">
                    <form>
                        <div class="form-group">
                            <div class="app-notices">
                                <div class="alert alert-info">
                                    <div class="panel">
                                        <div id="wrapper">
                                            <table align='center' id="data_table" style="border: 1px solid #CCCCCC">
                                                <tr>
                                                    <th
                                                        style="padding: 5px; font-size: 16px; border-bottom: 1px solid #CCCCCC">
                                                        Recommended fonts</th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <p style="padding: 5px">If you want to use your store in the
                                                            following languages: English, French, ... We recommend the
                                                            following fonts:
                                                            <span style="color:#B8256E">Lato, Roboto, Nunito Sans</span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label style="padding: 5px">Menu section font</label>
                        <div class="outer-block has-padding" style="padding: 10px; margin-bottom: 10px">
                            <span class="title" style="font-size: 15px">Lato</span>
                        </div>
                        <label style="padding: 5px">Preview</label>
                        <div class="outer-block has-padding" style="padding: 10px; height: 100px; margin-bottom: 10px">
                            <span class="title" style="font-size: 14px; opacity: 0.6">Lorem Ipsum is simply dummy text
                                of the printing
                                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book.</span>
                        </div>
                        <label style="padding: 5px">Body section font</label>
                        <div class="outer-block has-padding" style="padding: 10px; margin-bottom: 10px">
                            <span class="title" style="font-size: 15px">Lato</span>
                        </div>
                        <label style="padding: 5px">Preview</label>
                        <div class="outer-block has-padding" style="padding: 10px; height: 100px; margin-bottom: 10px">
                            <span class="title" style="font-size: 14px; opacity: 0.6">Lorem Ipsum is simply dummy text
                                of the printing
                                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book.</span>
                        </div>
                        <div class="form-group">
                            <div class="app-notices">
                                <div>
                                    <div class="panel">
                                        <div id="wrapper">
                                            <table align='center' id="data_table" style="border: 1px solid #CCCCCC">
                                                <tr>
                                                    <th
                                                        style="padding: 5px; font-size: 16px; border-bottom: 1px solid #CCCCCC">
                                                        Theme colors</th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div style="display: flex;align-items:center;justify-content:space-between; padding:10px">
                                                            <p style="margin-bottom: 0">Primary</p>
                                                            <div class="color-wrapper">
                                                                <input type="text" name="custom_color"
                                                                    placeholder="#FFFFFF" id="pickcolor"
                                                                    class="call-picker">
                                                                <div class="color-holder call-picker"></div>
                                                                <div class="color-picker" id="color-picker"
                                                                    style="display: none"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="outer-block has-padding" style="padding: 10px; margin-bottom: 10px">
                            <span class="title" style="font-size: 15px">Global breadcrumbs</span>
                            <div class="row" style="margin-bottom: 0">
                                <input type="checkbox" name="fancy-checkbox" id="fancy-checkbox" />
                                <label for="fancy-checkbox">Checkbox</label>
                            </div>
                        </div>


                        {{-- <div class="row">
                            <input type="text" name="fancy-text" id="fancy-text" />
                            <label for="fancy-text">Name</label>
                        </div>

                        <div class="row">
                            <textarea name="fancy-textarea" id="fancy-textarea"></textarea>
                            <label for="fancy-textarea">Description</label>
                        </div>

                        <button type="submit" tabindex="0">Submit</button> --}}
                    </form>
                </div>
            </section>
            <section id="side_tab2" class="item" data-title="Tab 2">
                <div class="item-content">
                    Tab 2 content. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                    volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                    suscipit, posuere a, pede. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                    semper suscipit, posuere a, pede.
                </div>
            </section>
            <section id="side_tab3" class="item" data-title="Tab 3">
                <div class="item-content">
                    Tab 3 content. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                    volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                    suscipit, posuere a, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                    Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                    semper suscipit, posuere a, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                    odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra
                    non, semper suscipit, posuere a, pede.
                </div>
            </section>
            <section id="side_tab4" class="item" data-title="Tab 4">
                <div class="item-content">
                    Tab 4 content. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                    volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                    suscipit, posuere a, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                    Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                    semper suscipit, posuere a, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                    odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra
                    non, semper suscipit, posuere a, pede.
                </div>
            </section>
            <section id="side_tab5" class="item" data-title="Tab 5">
                <div class="item-content">
                    Tab 5 content. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                    volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                    suscipit, posuere a, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                    Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                    semper suscipit, posuere a, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                    odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra
                    non, semper suscipit, posuere a, pede.
                </div>
            </section>
            <section id="side_tab6" class="item" data-title="Tab 6">
                <div class="item-content">
                    Tab 6 content. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                    volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                    suscipit, posuere a, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                    Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                    semper suscipit, posuere a, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                    odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra
                    non, semper suscipit, posuere a, pede.
                </div>
            </section>
        </article>
    </div>

</div>
@endsection
@section('script')
<script>
    tabControl();

var resizeTimer;
$(window).on("resize", function (e) {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(function () {
    tabControl();
  }, 250);
});

function tabControl() {
  var tabs = $(".tabbed-content").find(".tabs");
  if (tabs.is(":visible")) {
    tabs.find("a").on("click", function (event) {
      event.preventDefault();
      var target = $(this).attr("href"),
        tabs = $(this).parents(".tabs"),
        buttons = tabs.find("a"),
        item = tabs.parents(".tabbed-content").find(".item");
      buttons.removeClass("active");
      item.removeClass("active");
      $(this).addClass("active");
      $(target).addClass("active");
    });
  } else {
    $(".item").on("click", function () {
      var container = $(this).parents(".tabbed-content"),
        currId = $(this).attr("id"),
        items = container.find(".item");
      container.find(".tabs a").removeClass("active");
      items.removeClass("active");
      $(this).addClass("active");
      container.find('.tabs a[href$="#' + currId + '"]').addClass("active");
    });
  }
}


var colorList = [ '000000', '993300', '333300', '003300', '003366', '000066', '333399', '333333',
'660000', 'FF6633', '666633', '336633', '336666', '0066FF', '666699', '666666', 'CC3333', 'FF9933', '99CC33', '669966', '66CCCC', '3366FF', '663366', '999999', 'CC66FF', 'FFCC33', 'FFFF66', '99FF66', '99CCCC', '66CCFF', '993366', 'CCCCCC', 'FF99CC', 'FFCC99', 'FFFF99', 'CCffCC', 'CCFFff', '99CCFF', 'CC99FF', 'FFFFFF' ];
    var picker = $('#color-picker');

    for (var i = 0; i < colorList.length; i++ ) {
      picker.append('<li class="color-item" data-hex="' + '#' + colorList[i] + '" style="background-color:' + '#' + colorList[i] + ';"></li>');
    }

    $('body').click(function () {
      picker.fadeOut();
    });

    $('.call-picker').click(function(event) {
      event.stopPropagation();
      picker.fadeIn();
      picker.children('li').hover(function() {
        var codeHex = $(this).data('hex');

        $('.color-holder').css('background-color', codeHex);
        $('#pickcolor').val(codeHex);
      });
    });
</script>
@endsection
