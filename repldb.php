function get($key) {
  return exec("curl $REPLIT_DB_URL/" . $key);
}
function post($key, $value) {
  return exec("curl $REPLIT_DB_URL -d '" . $key . "=" . $value . "'");
}
