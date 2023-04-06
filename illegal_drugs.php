<?php
header("Access-Control-Allow-Origin: *");

$illegal_drugs = array(
    array(
        "name" => "Methamphetamines",
        "type" => "Stimulant",
        "formula"=> "C₁₀H₁₅N",
        "duration"=> "8–12 Hours",
        "legalstatus" => array("ca" => "Schedule I", "au" => "Schedule I", "de" => "Schedule I","us" => "schedule I", "uk" => "Schedule I"),
        "image" => "https://thumbs.dreamstime.com/b/heavy-drug-methamp…e-crystal-isoalted-black-background-175736660.jpg"
    ),

    array(
        "name" => "Marijuana",
        "type" => "Stimulant",
        "formula"=> "C₁₇H₂₁N₀₄",
        "duration"=> "20-90 Minutes",
        "legalstatus" => array("ca" => "Uscheduled", "au" => "S9", "de" => "Anlage III", "us" => "schedule I", "uk" => "Class B"),
        "image" => "https://wallpapercave.com/wp/wp2559447.jpg"
    ),

    array(
        "name" => "LSD",
        "type" => "Hallucinogenic",
        "formula"=> "C₂₀H₂₅N₃₀",
        "duration"=> "8–20 Hours",
        "legalstatus" => array("ca" => "schedule III", "au" => "S9", "de" => "Anlage I", "us" => "schedule I", "uk" => "Class A"),
        "image" => "https://mellowed.nl/wp-content/uploads/2018/09/LSD-Pretty-Drugthings-1800x1200.jpg"
    ),

    array(
        "name" => "Cocaine",
        "type" => "Stimulant",
        "formula"=> "C₁₀H₁₅N",
        "duration"=> "8–12 Hours",
        "legalstatus" => array("ca" => "schedule I", "au" => "S8", "de" => "Anlage III", "us" => "schedule III", "uk" => "Class A"),
        "image" => "https://static.eldiario.es/clip/b9e0de0a-4073-4b05-8a5c-d8d294bfaef2_16-9-aspect-ratio_default_0.jpg"
    ),

    array(
        "name" => "Ecstasy",
        "type" => "Empathogen-Stimulant",
        "formula"=> "C₁₁H₁₅N₂",
        "duration"=> "4-6 Hours",
        "legalstatus" => array("ca" => "S9", "au" => "schedule I", "de" => "Anlage I", "us" => "schedule I", "uk" => "Class A"),
        "image" => "https://i.ytimg.com/vi/XIs_NaaFSfc/hqdefault.jpg"
    ),
);

echo json_encode(array("illegal_drugs" => $illegal_drugs));
?>