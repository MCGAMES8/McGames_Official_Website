<?php

#####################################
# SUPPORT!
# Contant me on discord!
#####################################

function returnServersList() {

  createServer(
    "server1.png", // SERVER LOGO
    "SkyBlock", // SERVER NAME
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", // SERVER DESCRIPTION
    "server-1" // SERVER ID TO GET PLAYERS
  );
  createServer(
    "server2.png", // SERVER LOGO
    "Lifesteal", // SERVER NAME
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", // SERVER DESCRIPTION
    "server-2" // SERVER ID TO GET PLAYERS
  );
  createServer(
    "server3.png", // SERVER LOGO
    "Bedwars", // SERVER NAME
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", // SERVER DESCRIPTION
    "server-3" // SERVER ID TO GET PLAYERS
  );
  createServer(
    "server4.png", // SERVER LOGO
    "SkyWars", // SERVER NAME
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", // SERVER DESCRIPTION
    "server-4" // SERVER ID TO GET PLAYERS
  );

}

function returnServerQuery() {
  createServerQuery("Test", "port1", "eu.hypixel.net", "", "#server-1");
  createServerQuery("Test2", "port2", "eu.hypixel.net", "", "#server-2");
  createServerQuery("Test3", "port3", "eu.hypixel.net", "", "#server-3");
  createServerQuery("Test4", "port4", "eu.hypixel.net", "", "#server-4");
}

?>
