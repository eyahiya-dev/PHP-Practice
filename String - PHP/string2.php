<?php
// use php wordwrap for wrap long text
$stringMain= "The concept of an independent Palestine envisions a sovereign state for the Palestinian people in the territory historically known as Palestine, which includes the West Bank, Gaza Strip, and East Jerusalem. This vision is deeply intertwined with the Israeli-Palestinian conflict, which has been a source of tension and violence for decades.
Efforts to establish an independent Palestinian state have been the subject of various peace initiatives and negotiations between the Palestinian leadership and the Israeli government, with the goal of resolving the core issues of borders, refugees, security, and the status of Jerusalem. International organizations and numerous countries have recognized the State of Palestine in various forms, and the Palestinian Authority governs parts of the West Bank.
However, the establishment of a fully independent and internationally recognized Palestinian state remains a subject of ongoing dispute and negotiation. The situation and status may have evolved since my last update, so I recommend referring to the most recent news and international developments for the latest information on the status of an independent Palestine.";

$stringParts = wordwrap($stringMain, 50,"\n");
// print_r($stringParts);