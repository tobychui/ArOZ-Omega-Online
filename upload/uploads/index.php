<?php
/* Simple well-not-designed PHP file index 
   Author: Saren
   License: GPL v3 */

/* Settings */

error_reporting(0);

$settings = array(
    "helpers"       => True,/* Enable thumbnails, text preview, tooltip */
    "responsive"    => True,/* Enable responsive design */
    "icons"         => True,/* File icons */

    "displayDot"    => False,   /* Display files and folders start with "." */

    "thumbMimes"    => array("image"),   /* MIME types that thumbnails are able to be generated. */
    "thumbnailSize" => 220, /* Max PX of each side */

    "previewMimes"  => array("subtitle", "text", "python", "javascript", "script"/*, "html", "c++" */),
    "previewLimit"  => 250, /* Bytes */

    "displayRows"   => 50,  /* Default display rows */
    "rowsSelection" => array(10 ,20, 30, 50, 100),   /* Numbers of display rows for selection */

    "indexFiles"    => array("index.php", "index.html", "index.htm"),/* WARNING: Does not really prevent your files in a directory from being listed! */
    //"indexFiles"    => array(),  /* Do if you want the index page list files of indexed directories instead. */

    /* Cache Time To Live (TTL) settings. They are all in seconds. 
       In case you don't know: Caches gets things faster, but things will not be updated real-time.
       If TTL is up, then cache expires, the page will have to generate the cache again, things would get a bit slower. */
    "contentTTL"    => 10,  /* Content of a directory */
    "hasIndexTTL"   => 3600,/* Whether a directory has an index file */
    "sizeTTL"       => 180, /* Size of a file */
    "lastModdedTTL" => 180, /* Last modified time of a file */
    "thumbnailTTL"  => 600, /* Thumbnail of a viewable image */
    "previewTTL"    => 180, /* Preview text of a file */
);

$localization = array(
    "filename"  => "Filename",
    "filetype"  => "Type",
    "filesize"  => "File Size",
    "filemtime" => "Last Modification",
    "thumbnail" => "Thumbnail",
    "preview"   => "Preview",

    "image"         => "Image",
    "video"         => "Video",
    "audio"         => "Audio",
    "compressed"    => "zipped",
    "cdimage"       => "CD Image",
    "executable"    => "Executable",
    "subtitle"      => "Subtitle",
    "installer"     => "Installer",
    "appext"        => "Extention",
    "text"          => "Text",
    "python"        => "Python File",
    "javascript"    => "Javascript",
    "script"        => "Script",
    /*  "html"          => "Happy toffee milk lemon", */

    "folder"        => "=Folder=",
    "file"          => "File",

    "goBackToParentDirectory" => "Back to parent directory",

    "measureWordOfEntitles" => " items",
    "entitles"              => "Content",
    "firstPage"             => "Index",
    "lastPage"              => "Last Page",
    "nextPage"              => "Next page",
    "previousPage"          => "Previous Page",
    "all"                   => "All",
    "filter"                => "Search",
    "show"                  => "Show",

    "sInfo"                 => "Total Number of Content:_TOTAL_. Displaying items _START_ to _END_",
    "sInfoFiltered"         => "Filtered from _MAX_",
    "sInfoEmpty"            => "No result",
    "sEmptyTable"           => "No content",
);

$mimeTypes = array(
    "image"         => array("jpg", "jpeg", "png", "gif", "tif", "tiff", "pcd", "psd", "png", "ico"),
    "video"         => array("avi", "wmv", "mov", "mp4", "mkv", "wtv", "rm", "rmvb", "rma", "m4v", "flv", "f4v", "ts", "mpg", "3gp", "webm", "pmp", "264"),
    "audio"         => array("mp3", "ogg", "aac", "ape", "tta", "wav", "flac", "mid"),
    "compressed"    => array("zip", "rar", "7z", "tar", "gz", "bz2", "lzw", "tgz"),
    "cdimage"       => array("iso", "cue", "mds", "mdf"),
    "executable"    => array("exe"),
    "subtitle"      => array("ass", "srt"),
    "installer"     => array("msi", "apk", "ipa"),
    "appext"        => array("dll", "so"),
    "text"          => array("txt", "nfo"),
    "python"        => array("py"),
    "javascript"    => array("js"),
    "script"        => array("sh", "bat"),
    /*  "html"          => array("html", "htm"), */
);

$iconOfMimeTypes = array(
    /* Base64 encoded 24*24 PNG. Gnome icons are from Open Icon Library. 
       I don't either understand or care about the licenses of them,
       but I am pretty sure I am permitted to used them without asking. */
    "image"         => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAACXZwQWcAAAAYAAAAGAB4TKWmAAACz0lEQVRIx+2UTUhUURiGn3Pu38zozL3Mn8loU9NIRSUkUlD0Q62CIKhd0KKIKIgWhgVtWlWU/diiXRBRmxYR1aZNtZQyKbR/CcNxbMxoQB2zGb2nhZo6hlq2aNG7ut/hnPf53vNxLvzXLBIAFy81PM4X8pv/prGhGw+O1h3bBsCFi+eG1F/WufNnFIAOIDUJwNmG0wgxv86VguP1J5By1FMv3pBpfzovQHly7ZR6GsC23Cl1b3aAD529LKkMEwn6R7tkbHjjXU+uhZoZ4C8CGI6JGA7Q3pFmMGezMllGe+cXqhaGJzWRI2R7kVIyUuQ3PYFHFdUaEcehOhGg5W0PN+49Y82KcmyPoudrjqa2NHaJhXRtEjGHrJgFUJxgXM/f97JxVYS29gxbaxYALgOmS8+XPrasXkosUgK4ZGdPMB0wMDRMsERy+/F7PMbEHiti4PdoLIt5kXJszTTnlkDTQTclQlOEhjXKHZtEmcmhy8/QRB6AWw87OLlnObo+dsb0EQ5EZgYELIXhFVSs24AvGgMhKAz20930CMcLdTuTHG5sIeqYNB6qxtQFoJCGF08wTp9vKkBOuyKfS2VtDb6yRWDEQK/AKI0SW78FJ6jYvSnKt/ww29dECJdCwONil1qEFsRxonGCwRCprk5c151IoJT6OXu7FKyyCtAchLAAUDKE7hnCXwIjBRelFOneHAHLRegeNDvOvqsZNO0z8XiGxOLEVACT3smGUzk4dZOZNCQd7r6yeHIFqpIxkksqMIwsBw7upzv9iVSqCylF8y8T7N29g7nIMAxCoQjhcBR/wKbwvZ/MpwypzhTAyMeOrl0TAHf0cR2vPzEn82K1vWwlmayiK5UGxcjbN+/2XLt2vfsnIF8ovDjbcLr2T8yVUgghEALVPzDYfO/O/SOtra2vYfSvMX41fiDxR+2PjQUoAH1Adtx8MqD4+7eDzOPsP64fQBsycjclrewAAAAldEVYdGNyZWF0ZS1kYXRlADIwMDktMTEtMTVUMjM6MDQ6MjUtMDc6MDBt/LoyAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDEwLTAxLTExVDA5OjEwOjE5LTA3OjAw0PLOhAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxMC0wMS0xMVQwOToxMDoxOS0wNzowMKGvdjgAAAA0dEVYdExpY2Vuc2UAaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbGljZW5zZXMvR1BMLzIuMC9sagaoAAAAJXRFWHRtb2RpZnktZGF0ZQAyMDA5LTExLTE1VDIzOjA0OjI1LTA3OjAwMk3MBgAAABd0RVh0U291cmNlAEdOT01FIEljb24gVGhlbWXB+SZpAAAAIHRFWHRTb3VyY2VfVVJMAGh0dHA6Ly9hcnQuZ25vbWUub3JnLzLkkXkAAAAASUVORK5CYII=",
    "video"         => "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",
    "audio"         => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAl2cEFnAAAAGAAAABgAeEylpgAAAxxJREFUSMftlU1oXFUUx3/n3vfezMtXP/JR/KofqWAUXClkkRZpzaIqutCViht3bhQVStBFwIUbty5Ed7pxoQt3GqQgaqUYKBaqJbaNaUUTJjOTmcy8mffuvcdFRh1KMBPciQcO53L53/M7517uvfC//edNBhGdfvPQ2aD6oKIGMKoYQHZi6BsjoCKIM87c98U7W9eiQQCF97OvP7tQHh85ynB5gqH4AKV4jMSWEbEELchdm65r0M6rvPXRy52NyuYkMBgAYDQ9hLEBEY8xQmRjyvEYSTRMt2juQLyhnIxBUA24ADAwoLK9QloaYSu7QWKHiKMUIwkAPjgKl+FDh0BO12UYZX8ARHjvk/fb9e1mWVUFEBECSABUjPjYWnn1uVdKIISd+X0AgGbWTkSjw8fTWnNxcafCfjt5ZkRVFSMW2+vADJxdFUE0TWvFbsn/lnnA4BPZH0BRRESbTP7jmqAeg4h4dH8ADRgxmuL3BKiI7HuLgnpAyOphD4CDoOL3OuRTC6PjAF++3az+BRC0JHsDVNBIdwE8eiY9GifpB4Xzc0Yw5dKwzi+YOI5ij3gMaNuoOb14eKzoFi/FUfxC4YppY2xhhFywhaqPFc+uHdi49M0Dx+65Zf6hJ+3dE7O40KGVV/mtftHmoYEPjkTUBKcfz9w1c/Lp4y8md0zeT+7aSSNbH/69cRGlg3deot0umvd+6tidt9ut7io/rlfwIafwGYXL+Xr5h0xVrwcbdyM186dm52w1v0Dl+jKKR8RgTcxPV3/WViezTkMTwPYDpk+Usitrv86NDqdxp2hRbdS4dOVq8dX3F7JKrb60cr7++PKHnWz6ROmJxnbj4NTByTgEod0pWPllLZw9f651efXaam29+9S377bWAN//XAuQPvz80Guj48kzEnOrKL6+4c41N9xnlz/vLAEe4MhMMn7vI8kb6YHoMVUMnmJrw13aXM2XbnyXf5rnVIE2ULsZkAATwG296IE6sAnkfToLDAFHgCmgBDSBjZ62CbSA6s0fjul53HN6EN+X/M9oegWVekDt6XLA9WJnoEv2b+wPYSaLU22dSJ8AAAAldEVYdGNyZWF0ZS1kYXRlADIwMDktMDUtMDdUMjI6NTc6MDEtMDQ6MDAC3CDyAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDEwLTAxLTExVDA5OjEzOjIxLTA3OjAwhqU8AwAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxMC0wMS0xMVQwOToxMzoyMS0wNzowMPf4hL8AAAA0dEVYdExpY2Vuc2UAaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbGljZW5zZXMvR1BMLzIuMC9sagaoAAAAJXRFWHRtb2RpZnktZGF0ZQAyMDA5LTA1LTA3VDIyOjU2OjI5LTA0OjAww2V04gAAABN0RVh0U291cmNlAEdOT01FLUNvbG9yc6qZROIAAAAxdEVYdFNvdXJjZV9VUkwAaHR0cDovL2NvZGUuZ29vZ2xlLmNvbS9wL2dub21lLWNvbG9ycy9QHbXrAAAAAElFTkSuQmCC",
    "compressed"    => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAA3XAAAN1wFCKJt4AAAACXZwQWcAAAAYAAAAGAB4TKWmAAADrElEQVRIx7WWXYhVVRTHf2vvfc791BnHq404FaWmPpihZZMTmhSIU0IfD4qJL0G9BQX1EkE+RxDpi0EvQ0L4kH2AJkUPRWEU9ZBl5ReR44Bf43jv3Llzz9l79XDPODed9DbQgs1ZnI//76y1/rC3qCr/Z7jZfLR3V+47lyvflzSufp1OpltfOqAT//aumQ1AbG7djtc+iVfev/nhKHaf7xmU3Kwr2LNdlnixG12+uL7ZrH/48v70kBiHyxW5d+DJXEiba3//6cvD774gm5/fp8ktAbt3i+n+w+50cfFpDWFDacGd+aX926R3WX/+yN5ntwNlAGMd1VNfsHrjtvxk42r/md9++Ah4/JaAypnSL8vWP7Fi+YPPMP+O1cTlCj4oNi7h08nS2zusGhchNsbFOaonPmPV2k2FC+dOD76zqzj04lB9101nkCSNFQNPvUJPpZe0do7ayDEmrgxD8AA89uo3zF90D7XLZ5nbtw5rhWT0FMuWLseEZOeth6yKrw7TuHictDpCSGqQ1kFbgDB2klUbtvPtwTdxcxaR7+7DimdBzxzSEKQjFyVjf0I6AZpijSWKC4S0gYhh7NeDFMaPUzt/gkNDbyD5CrnyApyLOneRaEKYHKc2dplG8yTj9TpnT/9MvmcJ8xavZP7Cbh7oWsrRrw7z8ftvsenRQQrlSmeAcnkOAhz59APGLv5FsCUaPiKhSG/fXaTVEdJ8lbTaoKtyOxdH6xz9/ke2bNnaGaBWq9JsNnhkYA3CGhCLLd2GK/fiSgtxxQq20EPZxixujDEwfoGkOoJv1kA6ALR6ZAjeIwhiIB2/QDoxCpdOImJRETQoqCf4JiFt4nJzQTsFYEmbddSnhJCiwROm8uwavEdDeu1+vufuzoesQPAJ6n0GaAmp+gwWCCGFDK4hYGzcKl7EqGqY0aYiknVRQAQxBmMsYhzGxRgbY1yMi2JclMfFRVyuSJQrEBW7p2SiaZ22CrKbJssxYsEIQQzWWDQE1Ho0KKoBEwKoRzUQQiAuXAPkgSRrxA0tilozNoiNEA1AQBRUFUVBW0s10NqsWnlc7GkH1GaagWQPAcEYASxG7bT7hGmnyD89GRW7ptIcbYa9oQIR8T6ZsKW+h0AEVb0OMD2m9sQndUTEA/ZmLgrna+69A/tef05VLf8lRMLwFbsf/ERbncjUpp8NOQbmAd1ZqSb7xfY1UygwCYwCl4CGZsLSfqrIIC5b5iaCM0Wg5Z5U20Tl+mNLu4dnE3qd4N8b9Ka8rSrEfwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxMC0wMi0wOFQxMzoyNDo1Mi0wNzowMJhtlpsAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTAtMDEtMTFUMDk6MTM6MjEtMDc6MDD3+IS/AAAANHRFWHRMaWNlbnNlAGh0dHA6Ly9jcmVhdGl2ZWNvbW1vbnMub3JnL2xpY2Vuc2VzL0dQTC8yLjAvbGoGqAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAATdEVYdFNvdXJjZQBHTk9NRS1Db2xvcnOqmUTiAAAAMXRFWHRTb3VyY2VfVVJMAGh0dHA6Ly9jb2RlLmdvb2dsZS5jb20vcC9nbm9tZS1jb2xvcnMvUB216wAAAABJRU5ErkJggg==",
    "cdimage"       => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABGdBTUEAANkE3LLaAgAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAAl2cEFnAAAAGAAAABgAeEylpgAAA99JREFUSMeVlc2uFEUUx3/12d0z03fugIiIuGLhQ/gEJO5N3JC4daHxOXTlTp+AlTu2vAFrDSEQCGPM3Av0fHR3ddUpF8OMd2Cuwkk6lU6fqt85/3NOtQJ4/vz5l6enp79aa7/gPSznzDAM66ZpflksFj9fv3797xs3bhz1tQDDMEyMMWPn3Pucj4iQUhobY76pqur86dOnvz18+PB8Pp9z586dA18NkFJSOef3OvwCAO/9Z3VdfzeZTO42TXNy+/btd3z1LuUPNRFBa81sNrs1m81+nM1m37548WL24MGDdwEi8sGAnDMxRowxTKfTT6fT6Q91Xd8NIczu379/CLjM1D7aTEpCSkLOGa011lpCCCwWC5qmAbjlvf++KIqvz87Oyt0ZdhfNMZk2Xc9yuaEPw5vvCq0VZeGpSsd4PCaEwDAMaK2p6/pzEfnq/Pz8d2C+B4jIASClxOK8oVmuKQrPZFThnAUyXT+w2nS8btZMTyqqssJ7T0oJESHGWLqt82EGu1VEmP91xqvlhk8+vsqVWY01/yo5BWJMNMsNr14vAcVJPSLnTEqJrutQSnGpROcvl5y9XvHR1RlFWSBHpLPWcGVWUxSOxdmrbZbjChHh7Vk6yKAPA4uXDd57lFa0XU/OAqWHLCilMNailEIB41FJ349ZrVvKwqGU2qtwJANhtWppu8BoPGIIkWxBUiJ0HUZrtFb4wlNVJUopRDLWGvow0PWBwrvLASKZtuuRDFmEJIKWRE6CcRbZN0PAaI3znrbrWW06whDp+4B3lpQSKaXjNUgioOCi6sYYtDYUhdt2SRLatqcfEqt1y2q9YRgiInkf/aUAqzXWmK3WWuOdxRmNNRqRBCgkJTbtAEqx2nSsN+2FgZTjgN0cOG8pvMU5g/OWsiwovSPnxBACMUbaLtDHSBgi63VL2wfqUYm1et+qMcZjNRC81ZTe4rxnVBZUpcc7QxaDArROlAKrlz3L1YZN26G1Yjwq3mQpxwE7iDFbgHWGcVXgnQUF2iiqqiSlTDck+n5gvWnJOTOtJ5xMqr1EbwP0Re0gU3iLpEiMkSSyLd5O4yyEMNCHQAam9ZhrV04oCndQ4KMS7VatFdYoVqsVIRQURYH3FqP1PpCycIxLz+nJiFFVoC524mVtuit0zhmlQOVM37WE0GOtxVpDTIIic3U6wVmNcwbI7G6TSzN4M3kHfzelwBhFzkIcAnHYbnAGlDVc2HdwC8cY1TuAx48fN1rrJ1VVkbd2MPK79/95VEopz+fzJ8+ePesPAPfu3fvj5s2bP1VVdQ3IF+X6L8DbAYhIbprmz0ePHr3eAf4BS8zt+2hvfX0AAAAldEVYdGRhdGU6Y3JlYXRlADIwMTAtMDItMjNUMTg6MTQ6MjAtMDc6MDD1++xzAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDEwLTAyLTIzVDE4OjE0OjIwLTA3OjAwhKZUzwAAADV0RVh0TGljZW5zZQBodHRwOi8vY3JlYXRpdmVjb21tb25zLm9yZy9saWNlbnNlcy9MR1BMLzIuMS87wbQYAAAAFHRFWHRTb3VyY2UAQ3J5c3RhbCBDbGVhcvXi56gAAAA6dEVYdFNvdXJjZV9VUkwAaHR0cDovL2NvbW1vbnMud2lraW1lZGlhLm9yZy93aWtpL0NyeXN0YWxfQ2xlYXKvvkVjAAAAAElFTkSuQmCC",
    "executable"    => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAA3WAAAN1gGQb3mcAAAACXZwQWcAAAAYAAAAGAB4TKWmAAADsElEQVRIx9WVy28bVRTGv3vnjmfs+FmqxM+4cQtNSYKitKUEUaUSpGklBIuKVXe0gQVteS3gT2ADElt2ECGVZcWrFRJCIm2UkFTK063r1E79jBN74tiZiV8zLDJuTYhTIyQkjnR171zN/L7vnPsY4P8epNUXXzz3qQtAUn90T938LNXKd/SfwK+Mnt144/WTMoCkPvfvBerw994elrrcXvvQ8T7T+ZGBlkVoK/Arl4algM/nCMZXsRRL4/f5uOn06eeLrYjQp8GvXh6Wurw+RyiZAaMUPONw9a0zmA2vm18ePPpUEbof/Nrls9Ihj8+xnF4H4zgwjoJxHH6dCUHgeSyntsyvnunbV4Q2g78/OiL5PV5HNJMDoxSMUnDcTn/upWMQeAaBZzBb7eZro+eVZiJ0L/gH74xInW6PI7a+8dh1vaeE4LubMxjsD+DYYRdKlSq8zg7ja0N9hb1E6G74h++OSD6Xx5HM5XeguvO6+w67GQ6rCZqq4USPH85nbLj+0zSkombp7+nM7xZpzCB58c2BvNfpcaxuFHZcU/qkpztZ/DIehOugDe0HLNCqKoKhFATGIPI8zNaDNn+7QcGTAwnWIOD+9sbdZJWIpd7ugMBRArlUBSEAQGAycIgmcqjWVJzs7cRWqYLbf4QhGhgoIaCEYDUZ0VYyZSO06qk6lKsPEuHxoufIK18t3ot9ks3l5IDfy4ciGficdqzEsqhWVczfT8LAGKwWIzQVWF0rgOc48ByHTDqqzYXWCNHKXVO3Pl+sc/92F9XXovc5pzx4asC0vLIOAoBSAqNowOCJACghmF2Mo1DcBiUEqcRDbWohQYhW7pq89UV0322qX2LuhVDaNDU5LXcHOh5vSaga7oXSYJRCraoQeYZMKtIU3vSg1UVmQxnT5MSk/Oyhdog8jzZRgM/lAOM4mE0iMsmINjEXbwr/yxrsjkR4XG6zucYkRfi4JmeV/he6+WqlBqvFBItZRHBpQfv5zgOSS84dn7/zTRyABkBtVcAC4EA2tWQoKfkbCue5VNta2+7tOco0FXgUCWPs+xkSXfjxQuzBbQmAEYCg82qNQnsJtAGwArADcMiFjLiZe/RbSTh8oVJIlStlhRv74S7uT1//KJcOFXQwayi3CmB7PwGmOzLpzVJW8oJSzIYU3j8UjKxhaeLrLwtSfFMvSw1AGUBJByv6eO9tqoegZ1BvNr1sbQB43aUMoABgE8BGQys2glr5J9ezEQEY9FJoACq6UxnAlj7338efIoWKYDKL1gkAAAAldEVYdGNyZWF0ZS1kYXRlADIwMDktMTEtMTVUMjM6MDQ6MjUtMDc6MDBt/LoyAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDEwLTAxLTExVDA5OjEwOjE5LTA3OjAw0PLOhAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxMC0wMS0xMVQwOToxMDoxOS0wNzowMKGvdjgAAAA0dEVYdExpY2Vuc2UAaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbGljZW5zZXMvR1BMLzIuMC9sagaoAAAAJXRFWHRtb2RpZnktZGF0ZQAyMDA5LTExLTE1VDIzOjA0OjI1LTA3OjAwMk3MBgAAABd0RVh0U291cmNlAEdOT01FIEljb24gVGhlbWXB+SZpAAAAIHRFWHRTb3VyY2VfVVJMAGh0dHA6Ly9hcnQuZ25vbWUub3JnLzLkkXkAAAAASUVORK5CYII=",
    "subtitle"      => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAANkE3LLaAgAAAAJiS0dEAACqjSMyAAAACXBIWXMAAABIAAAASABGyWs+AAAACXZwQWcAAAAYAAAAGAB4TKWmAAACTElEQVQ4y23TS29bRRgG4OccO76kpY2Jy6UQLmIBAcIKsUAgUQmVFWLLZYPEFiQQf4IfgQSsWcEf6IKqJc2CBgqOwCQhtJKbtG6TNsWOz5lh4eMb5ft2M/POe/lm8NdrB6178f4+jLfubn5x4aFN01UmO14+VnF/5bJj6Qfz3c0vz3everdYTcmT6P8qyNQeX/j45Ie3TyyPV1P+ezwpmqCkudT8fPGjncb3E0lhBhJ1dCVSj4kyD1g8Pfgsc/3r7269MwTMMvSck2r42VnPOHRdFJcqn9Z721/pkRJm5HS01VX1XFFyQklQcvKJxbcbDSOGCUfwmzu2DAQbbmsqGcjlQq1angLEIoE71h1queeUm9oeUTMnyPUlo5SmTW/bsGvOsj03rOkrqaiqGU0qnWbIXLZl11POONJ1ScdoP8ongCDIRV2rrhl43nNO6/rVZUGQyYUinELSsP9wyQ2Lnlbzor4d5+zLBVEoGKZMH1nzp390fKNuy6G7ftT2UiFoDAgF3U3nHYjW/UKhuW3NslSQy6ZN54KWn0R1DQsaGhaU7fvBXiEom0ga5nxBR8Vb3jCv5Miub12xbkNTkBnMeui4qOdRbzqjLBEc2LHhbxe9rDQGpCMPLW1znrXiuIo5VU2velhuVUeclURuwXsGVjypOp77Kz6xpzFjujzMI7XiBaRKRXwkHvS+KJHKpz0E0iiVGgYw/EaT30eUGSRjQPsg3a6LMY5nPpn98GHGZBCvbV/tD69wtrn0+vypGGePT0BRFOL+71urrT7/AkHnQc6pFAmEAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDEwLTAyLTIzVDE4OjE0OjIwLTA3OjAw9fvscwAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxMC0wMi0yM1QxODoxNDoyMC0wNzowMISmVM8AAAA1dEVYdExpY2Vuc2UAaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbGljZW5zZXMvTEdQTC8yLjEvO8G0GAAAABR0RVh0U291cmNlAENyeXN0YWwgQ2xlYXL14ueoAAAAOnRFWHRTb3VyY2VfVVJMAGh0dHA6Ly9jb21tb25zLndpa2ltZWRpYS5vcmcvd2lraS9DcnlzdGFsX0NsZWFyr75FYwAAAABJRU5ErkJggg==",
    "installer"     => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAA3XAAAN1wFCKJt4AAAACXZwQWcAAAAYAAAAGAB4TKWmAAADrElEQVRIx7WWXYhVVRTHf2vvfc791BnHq404FaWmPpihZZMTmhSIU0IfD4qJL0G9BQX1EkE+RxDpi0EvQ0L4kH2AJkUPRWEU9ZBl5ReR44Bf43jv3Llzz9l79XDPODed9DbQgs1ZnI//76y1/rC3qCr/Z7jZfLR3V+47lyvflzSufp1OpltfOqAT//aumQ1AbG7djtc+iVfev/nhKHaf7xmU3Kwr2LNdlnixG12+uL7ZrH/48v70kBiHyxW5d+DJXEiba3//6cvD774gm5/fp8ktAbt3i+n+w+50cfFpDWFDacGd+aX926R3WX/+yN5ntwNlAGMd1VNfsHrjtvxk42r/md9++Ah4/JaAypnSL8vWP7Fi+YPPMP+O1cTlCj4oNi7h08nS2zusGhchNsbFOaonPmPV2k2FC+dOD76zqzj04lB9101nkCSNFQNPvUJPpZe0do7ayDEmrgxD8AA89uo3zF90D7XLZ5nbtw5rhWT0FMuWLseEZOeth6yKrw7TuHictDpCSGqQ1kFbgDB2klUbtvPtwTdxcxaR7+7DimdBzxzSEKQjFyVjf0I6AZpijSWKC4S0gYhh7NeDFMaPUzt/gkNDbyD5CrnyApyLOneRaEKYHKc2dplG8yTj9TpnT/9MvmcJ8xavZP7Cbh7oWsrRrw7z8ftvsenRQQrlSmeAcnkOAhz59APGLv5FsCUaPiKhSG/fXaTVEdJ8lbTaoKtyOxdH6xz9/ke2bNnaGaBWq9JsNnhkYA3CGhCLLd2GK/fiSgtxxQq20EPZxixujDEwfoGkOoJv1kA6ALR6ZAjeIwhiIB2/QDoxCpdOImJRETQoqCf4JiFt4nJzQTsFYEmbddSnhJCiwROm8uwavEdDeu1+vufuzoesQPAJ6n0GaAmp+gwWCCGFDK4hYGzcKl7EqGqY0aYiknVRQAQxBmMsYhzGxRgbY1yMi2JclMfFRVyuSJQrEBW7p2SiaZ22CrKbJssxYsEIQQzWWDQE1Ho0KKoBEwKoRzUQQiAuXAPkgSRrxA0tilozNoiNEA1AQBRUFUVBW0s10NqsWnlc7GkH1GaagWQPAcEYASxG7bT7hGmnyD89GRW7ptIcbYa9oQIR8T6ZsKW+h0AEVb0OMD2m9sQndUTEA/ZmLgrna+69A/tef05VLf8lRMLwFbsf/ERbncjUpp8NOQbmAd1ZqSb7xfY1UygwCYwCl4CGZsLSfqrIIC5b5iaCM0Wg5Z5U20Tl+mNLu4dnE3qd4N8b9Ka8rSrEfwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxMC0wMi0wOFQxMzoyNDo1Mi0wNzowMJhtlpsAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTAtMDEtMTFUMDk6MTM6MjEtMDc6MDD3+IS/AAAANHRFWHRMaWNlbnNlAGh0dHA6Ly9jcmVhdGl2ZWNvbW1vbnMub3JnL2xpY2Vuc2VzL0dQTC8yLjAvbGoGqAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAATdEVYdFNvdXJjZQBHTk9NRS1Db2xvcnOqmUTiAAAAMXRFWHRTb3VyY2VfVVJMAGh0dHA6Ly9jb2RlLmdvb2dsZS5jb20vcC9nbm9tZS1jb2xvcnMvUB216wAAAABJRU5ErkJggg==",
    "appext"        => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAANkE3LLaAgAAAAJiS0dEAACqjSMyAAAACXBIWXMAAABIAAAASABGyWs+AAAACXZwQWcAAAAYAAAAGAB4TKWmAAACL0lEQVQ4y2XSS24jRRzH8U+Vux07jh2HOIMICWLLHWDLjj0Sm5HYsgBxCQ6BxB04A0LiBCMhlAloGGXIJE6ch1/dVSzc2A5TvWhVq779e/wLf346efGY330e8vj+7Idfn53ZXgXVXtFre3fVql78avf67Mdfrl/5svkaqUNuNpVLY9nSrVpS6ZwMv9l/fjP4ZP2bSF5vpv7xRmXmtQWSltHp6PvDr/86+HkDpDXStmegpaWQBFmlcHh8+N3w+bxBipXCVLJrx4eCKOqLgoUrU9H01Le7s/OfzNaWxi4kFFqYuHSrNnZvoXaj/Gj0xcFBo5BkhbCVJSpFURcDLXtKRadTrC0lXdEm/kC0p2Wk0pN8LLnbzCGrXXu0oy8jWBjr4d7SQKGtNv9/S0FuFLJkZtG8k9WJrN4oBEcqHbVaFBXe05J0BUk2FyTJVugdbVRe6zswd2OgcmGqreOlfbEBIlluRJNHj7Klt2YqE3emkjv36m1LSbViDZVqpSNEx+Z6+EBprtq2dGnhWO3OQNJ2IqvtN2X0BQ+WG4Vs4tah7FLdlLsqg2zuQmn51FJXLWFfqRIaAILKTP00Q62SLZr7WVuY6Os2WOl9wdtmdAVZ5cqDgeBSYejKhSMnjVLQk6RNhiToaykFA6WoUCqb3ldIrXoCxGeSiFMEQz1FA+QGWIY18Mcknnfl/N/4NoPMzT3LYZn/Pn81X6n5fHT62e5RzunJ4Q2cZSnf/v7ytxdz/gUmPCzciAyRsQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxMC0wMi0yM1QxODoxNDoyMC0wNzowMPX77HMAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTAtMDItMjNUMTg6MTQ6MjAtMDc6MDCEplTPAAAANXRFWHRMaWNlbnNlAGh0dHA6Ly9jcmVhdGl2ZWNvbW1vbnMub3JnL2xpY2Vuc2VzL0xHUEwvMi4xLzvBtBgAAAAUdEVYdFNvdXJjZQBDcnlzdGFsIENsZWFy9eLnqAAAADp0RVh0U291cmNlX1VSTABodHRwOi8vY29tbW9ucy53aWtpbWVkaWEub3JnL3dpa2kvQ3J5c3RhbF9DbGVhcq++RWMAAAAASUVORK5CYII=",
    "text"          => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAA3WAAAN1gGQb3mcAAAACXZwQWcAAAAYAAAAGAB4TKWmAAADMklEQVRIx7WVzW4bVRTHf2dsxzb1CiUF27OgXytEqlCBirpgBQsWLUFCqqBQQOIReIA+AE9QaIHi8iXa8ABZsEGs2JQmhTZSW5PxoqRuSByPOzPnsJg7/kpsghBXM3Pn3pk5v3PO/5478D83GR58/V3jUC7nfZzEyWmDXDpr2YGI7Hgia2b2S6L6I1jj7bPnH+8b8O33V6+dWHhh8dAzRxCRXS8nSUJnZ5tOZ5sHfz7o3bx5Y1NVPzL48p233tN/BFz95ov47Jvncu3NDeI4xsxQVdQUU0VEyOcLFAoFkkg5UKnw2++r4crqr/c00VPvnvtgYxzgDQ9ULSciRFGUGlbFTFOQGXESs9Pt8GizTTO4x61bqywcP1F66cVTx8Tzlj+78ml5HJAfHpiZAynrwTrdbhczwwxMFTBEhJlikVzO4+HDNgCHDx/12puPnl1ZuXH98ucXX3v//Ic6AZDOqynVp6uApQD3zMwwtf791l9b/W8Xjj+fb7fbL99v3j0J/LQ3QC0jsb4eEIahg4AZYIo5aKFQYGurwyeXLhJHEWdOL+LX/GLzj7uvTASoS5GZUa1V+zBzffYsg8zOzTK78STN+02uL11j8fU3xBPvDHBhqgYYBK0WYdgFE5DUINZ/0a1BoVQqMT8/z0xxBlUliqLnJovsUmQYtVrVVZelqzkzOry6hQEUo16vk6jmJwOcyIjQClqEYUhab5JN74ZgVA5UOPjUwVEdp2mQ8zx8309NiPT7cdMD3/dI87QUeeKlGnR7ICDphT0DAErFMvV6bTQL00T2+hFIf08a78db5rhOjcDRRTyCoEWvFzqDkqngPJchBaBcLg0i2I8GIoLv1xGRwZlF4+5HCK4u9q2BiBAEAb2w1zeY2hZEPESEcrmM7/turzK3nPepAUC9Xh/1eiwaJN2z0p+R9UXQaSkCS8zSLdvMsiJGyIpNMOmrMfjKqeIcTCYBio+jaPnO2u1Xjx45NnG1TGpmxp2128RxvAwUgd4wwAPmGle+aux0upVK5YmTZoOfkWEj1TQqZLrbiohub3d+Xlr6oQHMAQGgw24WgRpQ+Feu726RM977j3b21/4GPBfM1+Kggw4AAAAldEVYdGNyZWF0ZS1kYXRlADIwMDktMTEtMTVUMjM6MDQ6MjUtMDc6MDBt/LoyAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDEwLTAxLTExVDA5OjEwOjE5LTA3OjAw0PLOhAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxMC0wMS0xMVQwOToxMDoxOS0wNzowMKGvdjgAAAA0dEVYdExpY2Vuc2UAaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbGljZW5zZXMvR1BMLzIuMC9sagaoAAAAJXRFWHRtb2RpZnktZGF0ZQAyMDA5LTExLTE1VDIzOjA0OjI1LTA3OjAwMk3MBgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAXdEVYdFNvdXJjZQBHTk9NRSBJY29uIFRoZW1lwfkmaQAAACB0RVh0U291cmNlX1VSTABodHRwOi8vYXJ0Lmdub21lLm9yZy8y5JF5AAAAAElFTkSuQmCC",
    "folder"        => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABHNCSVQICAgIfAhkiAAAAk1JREFUSIntlb1rFEEYh5+Z3b27fCcXjWCn5IoUClqphfpH2ImgYJPCwkrBkAQTENGTaCVBsNTG2sbGQq3SqKWEILkYvNxH7rLn7s7OjIWE5G4vOS8KNj7VwL7ze3benZmF/3RAbA9uT1296Ej3Vax1trXI9dyNKIwvPbj3/G23And74HnpxSuXJ7PDQ4cTRaXy2qEXL589BSYOLIgidXxoMMva9yWMiXcKHI+x0ZOEkcp1G94kAOsI4aCUairQOkJKl1Qq7dy6c83uFyaEVK505ubvLs61EYAQAhWZxMTqZoEbk1MIKRLPmrDWyz+engb2FoSRTswrrC9TWF/ePxw4MXEBa01TZotAUqtv8fnjJ2IVQac3buH9uw94KY+pmesVpJyfn1nMu80lgpXlFc6eOc/pU+ewNrmaTggh0bEezi/M3gfyLSuAIAg4MnYU368ShI2uBZ7rkfL6AHxo9w3CiJ6eflQcYoxql9FJgd+o40i53lYQRQGZdIZGsNF0Hn4XIaBWqwLia0JgjEFKieu6qDjAmn23/Z7UamW0Nl8Sglq9wuBAllgrtD5Ie351oVQtK6PjlYSgt7efXC6H1iFaRwcSgEOlXIqMkKsJQV9vP+Pjx1AqwNju+2+tRQiXjVIRa2yTYADAGEsqlSbWIdYmr4xOSOlhjGWzuplaLXyr7BaMCCHiOPZd18ngeX30ZEa7FgjhYLRG69h783qpsVtAYyt48nBh9qaUorv7oQVjbOj7Px4Vi8UIdv5oA8AIIP8kfLcHqAD1v5T3D/kJir30caSVdCgAAAAASUVORK5CYII=",
    "file"          => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAA3WAAAN1gGQb3mcAAAACXZwQWcAAAAYAAAAGAB4TKWmAAAC0UlEQVRIx7WUTU9TQRSG3zNtKZQqLoQEKJHPREMMQaLBsHClS40LE6L4Ef+DP8O9kRg/oOBHBPwBLNy5cqMICiyICQlBApi2CPfec1zMTO9w6a01xmknc+e2eZ9z5j1ngP88yN28fJPvSiTUw8APrgqQ0G/FfkFEJUW0KiIfA+b3gORvjd49qBnw+u3UzNDg+etdnT0goiN/DoIAxVIBxWIBmz829xcWPu0y8wMBJm/fvMd/BEy9euGP3hhLbO9uwfd9iAiYGSwMYQYRIZlMIZVKIfAYjdksvn5b/PVl8fMaBzxyZ+z+VhSg3A2zJIgInudpYWaIsAaJwA98lPaK2Nndxvf1NSwtLWJwYKj+4oWRPlJq/tnEk4aqABExIB21nSICmN/syDRmsPNzGwDQ3d2rzpzu71dEs0+fj6sqAH2M+kiMqNUluxAIQF0yBeHw2AcHziVbW3OXWGQ4HsBiSRAzdQkJIGRKCQARAEIyVYf89CQejz/CxsYGcm25NBEux3tgjkFEoD9uEgIiHT8RgRShpeUkTnV24NjxLGbnZtDUdIIUqWuuZrKSB+VIzQORhplmAAlARMg0ZJDJZdCR68CBdwBmhud5Z+MBbGM1BCGADMT4oFcV+mJiqk/Xo729HQFzMh5gTAZZQTINp5UP957dHK6uso+VANaDhFJO1OEalUYFhEgVgKUrUkbYRO6ulSjiArgKwNCVCgH2Toqu0WED56oZGDqR0qXoeEBOJm4uoZzU7oErXp42G+foQl0pZ1+TB3HieionM4QdTxZQgwdR84QiL8X2CsLn8kVZJQNAAhF9ZYtIuc/IaTyxZkfiIJANMIgDpA88b35ldflKb09fbLXEDRHByuoyfN+fB5AGsO8CFIDm/MR0vlTcy2azmWGR8CIUSKTWD7UWRN9NXCgUP8zNvcsDaAawDoDdMNMA2gCk/ir0o8Mz4vv/qFPb+A0FdoALrAKQWQAAACV0RVh0Y3JlYXRlLWRhdGUAMjAwOS0xMS0xNVQyMzowNDoyNS0wNzowMG38ujIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTAtMDEtMTFUMDk6MTA6MTgtMDc6MDB2hcUwAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDEwLTAxLTExVDA5OjEwOjE4LTA3OjAwB9h9jAAAADR0RVh0TGljZW5zZQBodHRwOi8vY3JlYXRpdmVjb21tb25zLm9yZy9saWNlbnNlcy9HUEwvMi4wL2xqBqgAAAAldEVYdG1vZGlmeS1kYXRlADIwMDktMTEtMTVUMjM6MDQ6MjUtMDc6MDAyTcwGAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAABd0RVh0U291cmNlAEdOT01FIEljb24gVGhlbWXB+SZpAAAAIHRFWHRTb3VyY2VfVVJMAGh0dHA6Ly9hcnQuZ25vbWUub3JnLzLkkXkAAAAASUVORK5CYII=",
    "python"        => "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",
    "javascript"    => "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",
    "script"        => "iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABGdBTUEAANkE3LLaAgAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAAl2cEFnAAAAGAAAABgAeEylpgAAA3hJREFUSMeVVbtu40YUPfMQX5JWDyqAEUix4SKw4cJFim3yC2kNA2kCpE2RIL3/IKnSZYH0bhY20i2Qyp+wgLCGI9MGZVuLXVmSRZnkzHBSrIcQLXljDXBBkJi5Z86591wSALi4uPi20Wj8yTnfwjOW1hppmka3t7d/3Nzc/L62tvZ+c3Nz6V4OAFLKCue8bFnWc/JDKQUpZZlS+r3necNer/fq5ORkGIYh9vf3FwGUUkRr/azkAJBlGaSUcBynXa/XfxJCyMFg8Gp7e3vyeC81lFddWZaBMYZWq9VptVq/+r7/4+XlZeP4+HgRIMuylUAIIdBaQwgBzjl83//S9/1f6vX6D2maNo6OjooSrcqAUgrOOaIowmAwgNYaWuuOZVk/u64bB0HwF4C4wGCVRQiB4zioVqtgjOVy1Wq1r3zf/67RaDQWGKwqUalUgud54JxDCAGlFJRSyLLMsW2bLwV46G8IIZ4NppQCADiOAwBIkgSEkGINTJHjOMZwOESpVAKltLDxqZVlGZIkAaUUvu/jsZcKDKbTKQghGI1GCPt9VMrlpSCEEBBCIKUEAKyvr2MymaBSqRRYFQCMeQghOD09xb9BANdxcH11hVkUFWpkAIQQqFQq2NvbA2MMQog811KJzGGpFFIh8M3Llyi/eIG/X79GFEUFAHNuY2MD0+kUnuflt1/KwASlFFJKjCcTdLtddN++RRAEiOMYZu98gS3LQhRFeZEf5tRyiYBPJhJpin/evMHtcIgkSfD11hbatRquwhAXvR6klNBaI0kSNJvNgjRLGWRZlocp3rtuF7PZDJVqFR8/fMD9/T0mo1HexkIIJEmSe2AeYL7NCxIZFoQQ2Lb9yVCcY3B9DcZY3u+MMVBKoZTKnyaHlPJpiYy+lFJYlgVKKVzXhW3bYIzlCUzfzwOY20spFxmY5CZqtRp2dnagtYbjOAUAI00cx7i7u0O73QYhJM/xZJENiziOsbu7i4ODg1yyeZ+YSNM0Hwue5+UyfRYAAMIwBGMs13yevmljxhhs20apVIJSCrPZDOUH139OIup5HprNJsbjcX4LM5PMWDYXmfeDZVlotVpmWJIFgLOzswmlNHBdF1przRjL/1rzMj02pQkhBKIoIkII3e/3gzAMkwLA4eHhu06n85vneV9orfXjov/f+9x3PR6PT8/Pz8cG4D+xu+SRhHTxZQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxMC0wMi0yM1QxODoxNDoyMC0wNzowMPX77HMAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTAtMDItMjNUMTg6MTQ6MjAtMDc6MDCEplTPAAAANXRFWHRMaWNlbnNlAGh0dHA6Ly9jcmVhdGl2ZWNvbW1vbnMub3JnL2xpY2Vuc2VzL0xHUEwvMi4xLzvBtBgAAAAUdEVYdFNvdXJjZQBDcnlzdGFsIENsZWFy9eLnqAAAADp0RVh0U291cmNlX1VSTABodHRwOi8vY29tbW9ucy53aWtpbWVkaWEub3JnL3dpa2kvQ3J5c3RhbF9DbGVhcq++RWMAAAAASUVORK5CYII=",
    /*  "html"          => "iAmAbAsE64ENCodEDPng", */
);

/* End of settings */

$GLOBALS["requestPath"] = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

/* Fake APC function, 10x slower than APC. */

if (!function_exists("apc_exists") AND !function_exists("apc_store") AND !function_exists("apc_fetch")) {
    $fakeAPC = array();
    function apc_exists($key) {
        global $fakeAPC;
        return array_key_exists($key, $fakeAPC);
    }

    function apc_store($key, $val, $ttl) {
        global $fakeAPC;
        $fakeAPC[$key] = $val;
        return True;
    }

    function apc_fetch($key) {
        global $fakeAPC;
        return $fakeAPC[$key];
    }
}

function currentDir() {
    foreach ($_GET as $key => $val) {
        $key = base64_decode(preg_replace("/\_/", "+", $key));
        while (!is_dir("./".$key) or isBadDir($key)) {
            $key = dirname($key);
            if ($key == "." or empty($key)) {
                /* prevent infinite loop */
                return "./";
            }
        }
        /* "./path/to////a//folder/" -> "./path/to/a/folder/" */
        return preg_replace("/\/+/", "/", $key."/");
    }
    return "./";
}

function parentDirLink() {
    $parentDir = dirname($GLOBALS["currentDir"]);
    if ($GLOBALS["currentDir"] == "./") {
        return "<a href='..'>Index of ".$GLOBALS["requestPath"].substr($GLOBALS["currentDir"], 2)."</a>";
    }
    return "<a href='?".base64_encode($parentDir)."'>Index of ".$GLOBALS["requestPath"].substr($GLOBALS["currentDir"], 2)."</a>";

}

function isBadDir($dir) {
    /* Unreliable trick to prevent parent directory of this index page from being listed. It can be bypassed easily I think?*/
    if (empty($dir)) {
        return True;
    } elseif (strpos($dir, "../") !== false) {
        return True;
    } else {
        $tree = explode("/", $dir);
        $len = count($tree);
        if (empty($tree[$len-1])) {
            if ($tree[$len-2] == "." or $tree[$len-2] == "..") {
                return True;
            }
        } else {
            if ($tree[$len-1] == "." or $tree[$len-1] == "..") {
                return True;
            }
        }
        return False;
    }
}

function getURL($file) {
    global $settings;
    if (!apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_File_".base64_encode($file))) {
        $href = $GLOBALS["currentDir"].$file;
        $iconImg = "";
        if (!is_file($href)) {
            if ($settings["icons"]) {
                $iconImg = "<img src='?i=folder'/>";
            }
            $url = "<a href='?".base64_encode($href)."'>".$iconImg." ".$file."</a>";
        } else {
            $href = str_replace("./", "", $href);
            if ($settings["icons"]) {
                $iconImg = "<img src='?i=".getMimeType($GLOBALS["currentDir"].$file)."'/>";
            }
            $href = rawurlencode($href);
            $href = str_replace("%2F", "/", $href);
            $url = "<a href='$href'>$iconImg $file</a>";
        }

        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_File_".base64_encode($file), $url, $settings["contentTTL"]);
    } else {
        $url = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_File_".base64_encode($file));
    }
    return $url;
}

function getContent($dir) {
    global $settings;
    if (!apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_Content_".base64_encode($dir))) {
        $files = array();
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) { //scan the folder
                if ($settings["displayDot"]) {
                    if ($file != "." AND $file != "..") {
                        $files[] = $file;
                    }
                } else {
                    if (substr($file, 0, 1) != ".") {
                        $files[] = $file;
                    }
                }
            }
            closedir($handle);
        }
        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_Content_".base64_encode($dir), $files, $settings["contentTTL"]);
    } else {
        $files = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_Content_".base64_encode($dir));
    }
    return $files;
}

function getMimeType($file) {
    if (!apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_MimeType_".base64_encode($file))) {
        global $mimeTypes, $settings;
        if (!is_file($file)) {
            $mime = "folder";
        } else {
            foreach ($mimeTypes as $key => $val) {
                $fileExt = pathinfo($file, PATHINFO_EXTENSION);
                if (in_array(strtolower($fileExt), $val)) {
                    $mime = $key;
                    break;
                }
            }
            if (!isset($mime)) {
                $mime = "file";
            }
        }
        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_MimeType_".base64_encode($file), $mime, $settings["contentTTL"]);
    } else {
        $mime = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_MimeType_".base64_encode($file));
    }
    return $mime;
}

function hasIndex($dir) {
    /* If a directory contains index such as index.html, return the real path */
    global $settings;
    if (!apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_hasIndex_".base64_encode($dir))) {
        $hasIndex = False;
        foreach (getContent($dir) as $childFile) {
            if (in_array($childFile, $settings["indexFiles"])) {
                $hasIndex = True;
                break;
            }
        }
        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_hasIndex_".base64_encode($dir), $hasIndex, $settings["hasIndexTTL"]);
    } else {
        $hasIndex = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_hasIndex_".base64_encode($dir));
    }
    return $hasIndex;
}

function getSize($file) {
    global $settings;
    if (!apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_filesizeString_".base64_encode($file))) {
        if (is_file($file)) {
            $filesize = filesize($file);
            $filesizeString = toHumanReadable($filesize);
        } else {
            $filesizeString = "";
        }
        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_filesizeString_".base64_encode($file), $filesizeString, $settings["sizeTTL"]);
    } else {
        $filesizeString = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_filesizeString_".base64_encode($file));
    }
    return $filesizeString;
}

function toHumanReadable($filesize) {
    $sizeTexts = array("B", "KB", "MB", "GB", "TB", "PB");
    $tmpfilesize = $filesize;
    foreach ($sizeTexts as $lvl => $sizeText) {
        if ($filesize <= pow(1024,$lvl+1)) {
            return round($tmpfilesize,2).$sizeText;
        } else {
            $tmpfilesize = $tmpfilesize/1024;
        }
    }
}

function getLastModded($file) {
    global $settings;
    if (!apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_lastModded_".base64_encode($file))) {
        $lastModded = date("Y-m-d h:i:s", filemtime($file));
        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_lastModded_".base64_encode($file), $lastModded, $settings["lastModdedTTL"]);
    } else {
        $lastModded = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_lastModded_".base64_encode($file));
    }
    return $lastModded;
}

function getThumbnail($filepathEncoded) {
    global $settings;
    if (!apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_thumb_$filepathEncoded")) {
        $filepathDecoded = base64_decode($filepathEncoded);
        /* Unreliable trick to prevent parent directory of this index page from being listed, again. */
        if (isBadDir($filepathDecoded)) {
            exit;
        }
        if (!in_array(getMimeType($filepathDecoded), $settings["thumbMimes"])) {
            exit;
        }
        $handle = fopen($filepathDecoded, "r");
        list($width, $height) = getimagesize($filepathDecoded);
        $srcImageStr = fread($handle, filesize($filepathDecoded));
        $srcImage = imagecreatefromstring($srcImageStr);

        $maxPx = max($width, $height);
        if ($maxPx >= $settings["thumbnailSize"]) {
            $percent = $settings["thumbnailSize"]/$maxPx;
        } else {
            /* Make sure the file is really an picture */
            ob_start();
            imagepng($srcImage);
            $srcImageStr = ob_get_contents();
            ob_end_clean();
            apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_thumb_$filepathEncoded", $srcImageStr, $settings["thumbnailTTL"]);
            return $srcImageStr;
        }

        $newwidth = $width * $percent;
        $newheight = $height * $percent;

        $thumb = imagecreatetruecolor($newwidth, $newheight);
        imagealphablending($thumb, false);
        imagesavealpha($thumb, true);
        imagecopyresampled($thumb, $srcImage, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        ob_start();
        imagepng($thumb);
        $thumbStr = ob_get_contents();
        ob_end_clean();

        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_thumb_lastModded_$filepathEncoded", time(), $settings["thumbnailTTL"]);
        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_thumb_$filepathEncoded", $thumbStr, $settings["thumbnailTTL"]);
    } else {
        $thumbStr = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_thumb_$filepathEncoded");
    }
    return $thumbStr;
}

function getPreviewText($file) {
    global $settings;
    if (!apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_previewText_".base64_encode($file))) {
        $handle = fopen($file, "r");
        $previewText = htmlentities(fread($handle, $settings["previewLimit"]), ENT_QUOTES | ENT_IGNORE, "UTF-8");
        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_previewText_".base64_encode($file), $previewText, $settings["previewTTL"]);
    } else {
        $previewText = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_previewText_".base64_encode($file));
    }
    return $previewText;
}

if (isset($_GET["t"]) AND !empty($_GET["t"])):
    header('Content-Type: image/png');
    $lastModded = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_thumb_lastModded_".$_GET["t"]);
    header("Last-Modified: " . gmdate("D, d M Y H:i:s", $lastModded) . " GMT");
    if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $lastModded && apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_thumb_".$_GET["t"])) {
        header("HTTP/1.1 304 Not Modified");
        exit();
    }
    echo getThumbnail($_GET["t"]);

elseif (isset($_GET["i"]) AND !empty($_GET["i"])):
    header('Content-Type: image/png');
    if (apc_exists($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_icon_lastModded_".$_GET["i"])) {
        $lastModded = apc_fetch($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_icon_lastModded_".$_GET["i"]);
    } else {
        $lastModded = time();
        apc_store($_SERVER['HTTP_HOST'].$GLOBALS["requestPath"]."_icon_lastModded_".$_GET["i"], $lastModded);
    }
    header("Last-Modified: " . gmdate("D, d M Y H:i:s", $lastModded) . " GMT");
    if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $lastModded) {
        header("HTTP/1.1 304 Not Modified");
        exit();
    }
    echo base64_decode($iconOfMimeTypes[$_GET["i"]]);

elseif (hasIndex($GLOBALS["currentDir"] = currentDir()) && $GLOBALS["currentDir"] != "./"):
    $GLOBALS["currentDir"] = str_replace("./", "", $GLOBALS["currentDir"]);
    $GLOBALS["currentDir"] = rawurlencode($GLOBALS["currentDir"]);
    $GLOBALS["currentDir"] = str_replace("%2F", "/", $GLOBALS["currentDir"]);
    header("Location: ".$GLOBALS['currentDir'], true, 302);
else:

    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
	<p>Online Content Explorer. All credit to Saren Arterius, Licensed under GPL v3</p>
        <title>Index of <?php echo $GLOBALS["requestPath"].substr($GLOBALS["currentDir"], 2); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <style>
            .container {
                padding-top: 150px;
                padding-bottom: 60px;
                width: 80%;
            }

            .page-header {
                float: left;
                position: absolute;
                margin-top: 50px;
                width: 100%;
                background-color: white;
            }

            .filter {
                text-align: right;
                margin: auto;
                position: fixed;
                right: 20px;
                bottom: 20px;
                height: 34px;
            }

            .pagingfull_numbers {
                text-align: left;
                margin: auto;
                position: fixed;
                left: 20px;
                bottom: 20px;
            }

            .info {
                text-align: center;
                position: fixed;
                width: 380px;
                bottom: 20px;
                left: 0;
                right: 0;
                margin: auto;
            }

            #display_menu {
                width: auto;
                display: inline;
            }

            table {
                margin: 1em 0;
                clear: both;
            }
        </style>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script>
            /* Default class modification */
            $.extend( $.fn.dataTableExt.oStdClasses, {
                "sInfo": "help-block",
                "sPageFirst": "btn btn-primary",
                "sPagePrevious": "btn btn-primary",
                "sPageNext": "btn btn-primary",
                "sPageLast": "btn btn-primary",
                "sPageButton": "btn btn-default",
                "sPageButtonStaticDisabled": "btn btn-default disabled",
                "sPageButtonActive": "btn btn-default disabled",
                "sFilter": "<?php if ($settings["responsive"]) { echo "filter"; } ?>",
                "sPaging": "<?php if ($settings["responsive"]) { echo "paging"; } ?>",
                "sInfo": "<?php if ($settings["responsive"]) { echo "info"; } ?> well well-sm",
            } );

            /* Sort by human-readable file size. http://datatables.net/plug-ins/sorting#file_size */
            $.extend( $.fn.dataTableExt.oSort, {
                "file-size-pre": function ( a ) {
                    var x = a.substring(0,a.length - 2);

                    if (a.substring(a.length - 2, a.length) == "KB") {
                        var x_unit = 1024;
                    } else if (a.substring(a.length - 2, a.length) == "MB") {
                        var x_unit = 1048576;
                    } else if (a.substring(a.length - 2, a.length) == "GB") {
                        var x_unit = 1073741824;
                    } else if (a.substring(a.length - 2, a.length) == "TB") {
                        var x_unit = 1099511627776;
                    } else if (a.substring(a.length - 2, a.length) == "TB") {
                        var x_unit = 1125899906842624;
                    } else if (a.substring(a.length - 1, a.length) == "B") {
                        x = a.substring(0,a.length - 1);
                        var x_unit = 1;
                    } else {
                        return -1;
                    }

                    return parseInt( x * x_unit, 10 );
                },

                "file-size-asc": function ( a, b ) {
                    return ((a < b) ? -1 : ((a > b) ? 1 : 0));
                },

                "file-size-desc": function ( a, b ) {
                    return ((a < b) ? 1 : ((a > b) ? -1 : 0));
                }
            } );


            $(document).ready(function() {
                /* Mother of sort and filtering */
                $('.table').dataTable({
                    "sPaginationType": "full_numbers",
                    "iDisplayLength": <?php echo $settings["displayRows"]; ?>,
                    "oLanguage": {
                        "sSearch": "",
                        "sInfo": "<?php echo $localization["sInfo"]; ?>",
                        "sInfoFiltered": "<br/><?php echo $localization["sInfoFiltered"]; ?>",
                        "sInfoEmpty": "<?php echo $localization["sInfoEmpty"]; ?>",
                        "sEmptyTable": "<?php echo $localization["sEmptyTable"]; ?>",
                        "sLengthMenu": '<?php echo $localization["show"]; ?><select id="display_menu" class="form-control">'+
                        <?php
                            foreach ($settings["rowsSelection"] as $val) { ?>
                        '<option value="<?php echo $val; ?>"><?php echo $val.$localization["measureWordOfEntitles"]; ?></option>'+
                        <?php
                            }
                        ?>
                        '<option value="-1"><?php echo $localization["all"]; ?></option>'+
                        '</select><?php echo $localization["entitles"]; ?>',
                        "oPaginate": {
                            "sFirst": "<?php echo $localization["firstPage"]; ?>",
                            "sLast": "<?php echo $localization["lastPage"]; ?>",
                            "sNext": "<?php echo $localization["nextPage"]; ?>",
                            "sPrevious": "<?php echo $localization["previousPage"]; ?>",
                        }
                    },
                    "aaSorting": [
                        [ 1, "asc" ],
                        [ 0, "asc" ]
                    ],
                    "aoColumns": [
                        null,
                        null,
                        { "sType": "file-size" },
                        null
                    ]
                });
                $("input[aria-controls='DataTables_Table_0']").addClass("form-control");
                $("input[aria-controls='DataTables_Table_0']").attr("placeholder", "<?php echo $localization["filter"]; ?>");

                /* Set navbar(.page-header) to fixed if it is scrolled over */
                var navpos = $(".page-header").offset();
                $(window).bind('scroll', function() {
                    if ($(window).scrollTop() > navpos.top && $(window).height() > 500) {
                        $(".page-header").css({
                            "position": "fixed",
                            "margin-top": "0px",
                        });
                    } else {
                        $(".page-header").css({
                            "position": "absolute",
                            "margin-top": "50px",
                        });
                    }
                });

                function responsive() {
                    if ($(window).width()/2 <= paginateWidth + 210) {
                        $(".well-sm").removeClass("info");
                    } else {
                        $(".well-sm").addClass("info");
                    }
                    if ($(window).width() <= paginateWidth + filterWidth + 156) {
                        $("#DataTables_Table_0_filter").removeClass("filter");
                        $("#DataTables_Table_0_paginate").removeClass("pagingfull_numbers");
                    } else {
                        $("#DataTables_Table_0_filter").addClass("filter");
                        $("#DataTables_Table_0_paginate").addClass("pagingfull_numbers");
                    }
                    if (paginateWidth >= $(".table-responsive").width()) {
                        $("#DataTables_Table_0_first").text("<<");
                        $("#DataTables_Table_0_previous").text("<");
                        $("#DataTables_Table_0_next").text(">");
                        $("#DataTables_Table_0_last").text(">>");
                    } else {
                        $("#DataTables_Table_0_first").text(firstStr);
                        $("#DataTables_Table_0_previous").text(prevStr);
                        $("#DataTables_Table_0_next").text(nextStr);
                        $("#DataTables_Table_0_last").text(lastStr);
                    }

                    if ($(window).width() <= 960) {
                        $(".container").css({
                            "width": "100%",
                            "padding-right": "0px",
                            "padding-left": "0px",
                        });
                    } else {
                        $(".container").css({
                            "width": "80%",
                            "padding-right": "15px",
                            "padding-left": "15px",
                        });
                    }

                    if ($(window).height() <= 500) {
                        $(".page-header").css({
                            "position": "absolute",
                            "margin-top": "50px",
                        });
                    } else if ($(window).scrollTop() > navpos.top) {
                        $(".page-header").css({
                            "position": "fixed",
                            "margin-top": "0px",
                        });
                    }
                }

                function helpersInit() {
                    $(".page-header").tooltip({
                        container: "body",
                        placement: "auto",
                    });

                    $('.has_popover').popover({
                        trigger: "hover",
                        container: "body",
                        placement: "auto",
                        html: true,
                    });
                }

                <?php 
                    if ($settings["responsive"]) { 
                        echo '  $(window).resize(function() {
                                    responsive();
                                });
                                $("#display_menu").change(function() {
                                    paginateWidth = $("#DataTables_Table_0_paginate").width();
                                });
                                var paginateWidth = $("#DataTables_Table_0_paginate").width();
                                var filterWidth = $(".form-control").width();
                                var firstStr = $("#DataTables_Table_0_first").html()
                                var prevStr = $("#DataTables_Table_0_previous").html()
                                var nextStr = $("#DataTables_Table_0_next").html()
                                var lastStr = $("#DataTables_Table_0_last").html()
                            '; 
                        echo "responsive();"; 
                    } 
                    if ($settings["helpers"]) { 
                        echo '  $("body").bind("click mouseover", function() {
                                    helpersInit();
                                });
                            '; 
                        echo "helpersInit();"; 
                    }
                ?>
            });
        </script>
    </head>
    <body>
    <div title="<?php echo $localization["goBackToParentDirectory"]; ?>" class="page-header" style="text-align: center; ">
        <h1><?php echo parentDirLink(); ?></h1>
    </div>
    <div class="container">
        <div class="<?php if ($settings["responsive"]) { echo "table-responsive"; } ?>">
            <table class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th title="<?php echo $localization["filename"]; ?>"><?php echo $localization["filename"]; ?></th>
                    <th title="<?php echo $localization["filetype"]; ?>"><?php echo $localization["filetype"]; ?></th>
                    <th title="<?php echo $localization["filesize"]; ?>" style="width: 90px;"><?php echo $localization["filesize"]; ?></th>
                    <th title="<?php echo $localization["filemtime"]; ?>" style="width: 160px;"><?php echo $localization["filemtime"]; ?></th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach (getContent($GLOBALS["currentDir"]) as $file) { ?>

                    <tr<?php
                    if (!is_file($GLOBALS["currentDir"].$file)) {
                        echo " class='success'";
                    }
                    $mineType = getMimeType($GLOBALS["currentDir"].$file);
                    ?>>
                        <?php
                        if (in_array($mineType, $settings["thumbMimes"])) {
                            ?>

                            <td class='has_popover' title='<?php echo $localization["thumbnail"]; ?>' data-content='<img src="?t=<?php echo base64_encode($GLOBALS["currentDir"].$file); ?>"/>'><?php echo getURL($file); ?></td>
                        <?php
                        } elseif (in_array($mineType, $settings["previewMimes"])) {
                            ?>

                            <td class='has_popover' title='<?php echo $localization["preview"]; ?>' data-content='<pre><?php echo getPreviewText($GLOBALS["currentDir"].$file); ?></pre>'><?php echo getURL($file); ?></td>
                        <?php
                        } else {
                            ?>

                            <td><?php echo getURL($file); ?></td>
                        <?php
                        }
                        ?>

                        <td><?php echo $localization[$mineType]; ?></td>
                        <td><?php echo getSize($GLOBALS["currentDir"].$file); ?></td>
                        <td><?php echo getLastModded($GLOBALS["currentDir"].$file); ?></td>
                    </tr>
                <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
    </body>
    </html>
<?php
endif;
?>