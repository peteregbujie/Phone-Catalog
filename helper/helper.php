<?php

function redirect($page = false, $message = null, $message_type = null)
{
    if (is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT-NAME'];
    }

    if ($message = !null) {
        $_SESSION['message'] = $message;
    }

    if ($message_type = !null) {
        $_SESSION['message_type'] = $message_type;
    }

    header('Location:' . $location);
    exit;
}

function showmessage()
{
    if (!empty($_SESSION['message'])) {
        $message = $_SESSION['message'];

        if (!empty($_SESSION['message_type'])) {
            $message_type = $_SESSION['message_type'];

            if ('error' == $message_type) {
                echo '<div class="alert alert-warning alert-dismissible fade show mtop" role="alert">
                ' . $message . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            } else {
                echo '<div class="alert alert-success mtop" role="alert">
                ' . $message . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
        }
        unset($_SESSION['message'], $_SESSION['message_type']);
    } else {
        echo '';
    }
}
