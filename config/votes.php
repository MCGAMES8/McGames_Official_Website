<?php

function vote_create() {

    $vote[0] = "Vote #1";
    $vote_link[0] = "https://google.com";

    $vote[1] = "Vote #2";
    $vote_link[1] = "https://google.com";

    $vote[2] = "Vote #3";
    $vote_link[2] = "https://google.com";

    $vote[3] = "Vote #4";
    $vote_link[3] = "https://google.com";

    $vote[4] = "Vote #5";
    $vote_link[4] = "https://google.com";

    $iteme_vote = count($vote);

    for ($i = 0; $i < $iteme_vote; $i++) {
      echo ('<a href="'.$vote_link[$i].'" target="_blank"><i class="fas fa-thumbs-up"></i> '.$vote[$i].'</a>');
    }

}

function vote_rewards() {

    $reward[0] = "$50,000 In-Game Cash";
    $reward[1] = "$50,000 In-Game Cash";
    $reward[2] = "$50,000 In-Game Cash";
    $reward[3] = "$50,000 In-Game Cash";

    $iteme_reward = count($reward);

    for ($i = 0; $i < $iteme_reward; $i++) {
      echo ('<div class="vote-reward"><p>'.$reward[$i].'</p></div>');
    }

}

?>
