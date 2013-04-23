<?php
    require_once('./config.php');

    $txt = '';
    if (isset($_GET['date'], $_GET['message'])) {
        $date_diff = calcDate(urldecode(trim($_GET['date'])));
        $msg = filter_var(urldecode($_GET['message']), FILTER_SANITIZE_STRING);
        $txt = '<strong>' . $date_diff . '</strong>' . $msg;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <meta http-equiv="Cache-control" content="no-cache" />

        <?php
            // #AUTOREFRESH
            if ($_autorefresh) {
                echo '<meta http-equiv="Refresh" content="' . $_autorefresh . '" />';
            }
        ?>

        <style type="text/css">
            @font-face {
                font-family: "Roadgeek2005SeriesD";
                src: url("http://panic.com/fonts/Roadgeek 2005 Series D/Roadgeek 2005 Series D.otf");
            }
            body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td {
                margin: 0;
                padding: 0;
            }

            fieldset,img {
                border: 0;
            }


            /* Settin' up the page */

            html, body, #main {
                overflow: hidden!important; /* */
                background: transparent!important;
            }

            body {
                color: white;
                font-family: 'Roadgeek2005SeriesD', sans-serif;
                font-size: 20px;
                line-height: 24px;
            }

            #main {
                width: 100%;
                height: 100%;
                text-align: center;
            }

            p {
                width: 100%;
                margin: 0px auto;
                padding-top: 17px;
                font-size: 27px;
                line-height: 25px;
                color: #7e7e7e;
                text-transform: none;
            }
                p img {
                    vertical-align: middle;
                }
                p strong {
                    color: white;
                    text-transform: uppercase;
                    font-weight: normal;
                    padding: 0 12px 0 5px;
                }
        </style>
    </head>

    <body>
        <div id="main">
            <p><img src="<?php echo EXCLAM_ICON; ?>" alt="" width="30" /> <?php echo $txt; ?></p>
        </div><!-- main -->
    </body>
</html>
