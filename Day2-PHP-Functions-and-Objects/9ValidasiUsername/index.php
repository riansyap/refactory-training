<?php

function validasi($user) {
  if (preg_match('/^[A-z0-9\._\-]{3,20}$/', $user)==1) {
    return "valid";
  }

  return "Tidak Valid";
}

echo validasi('dsadhjksahdjk%dhsajkd');