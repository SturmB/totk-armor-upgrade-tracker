<?php

namespace Database\Seeders;

use App\Models\TotkArmor;
use App\Models\TotkResource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ArmorResourceSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the Armor-Resource pivot table.
     */
    public function run(): void
    {
        // Armors
        $championsTunic = TotkArmor::where("name", "Champion's Tunic")->first()->id;
        $hylianHood = TotkArmor::where("name", "Hylian Hood")->first()->id;
        $hylianTunic = TotkArmor::where("name", "Hylian Tunic")->first()->id;
        $hylianTrousers = TotkArmor::where("name", "Hylian Trousers")->first()->id;
        $soldiersHelm = TotkArmor::where("name", "Soldier's Helm")->first()->id;
        $soldiersArmor = TotkArmor::where("name", "Soldier's Armor")->first()->id;
        $soldiersGreaves = TotkArmor::where("name", "Soldier's Greaves")->first()->id;
        $amberEarrings = TotkArmor::where("name", "Amber Earrings")->first()->id;
        $rubyCirclet = TotkArmor::where("name", "Ruby Circlet")->first()->id;
        $snowquillHeaddress = TotkArmor::where("name", "Snowquill Headdress")->first()->id;
        $snowquillTunic = TotkArmor::where("name", "Snowquill Tunic")->first()->id;
        $snowquillTrousers = TotkArmor::where("name", "Snowquill Trousers")->first()->id;
        $sapphireCirclet = TotkArmor::where("name", "Sapphire Circlet")->first()->id;
        $desertVoeHeadband = TotkArmor::where("name", "Desert Voe Headband")->first()->id;
        $desertVoeSpaulder = TotkArmor::where("name", "Desert Voe Spaulder")->first()->id;
        $desertVoeTrousers = TotkArmor::where("name", "Desert Voe Trousers")->first()->id;
        $flamebreakerHelm = TotkArmor::where("name", "Flamebreaker Helm")->first()->id;
        $flamebreakerArmor = TotkArmor::where("name", "Flamebreaker Armor")->first()->id;
        $flamebreakerBoots = TotkArmor::where("name", "Flamebreaker Boots")->first()->id;
        $topazEarrings = TotkArmor::where("name", "Topaz Earrings")->first()->id;
        $rubberHelm = TotkArmor::where("name", "Rubber Helm")->first()->id;
        $rubberArmor = TotkArmor::where("name", "Rubber Armor")->first()->id;
        $rubberTights = TotkArmor::where("name", "Rubber Tights")->first()->id;
        $opalEarrings = TotkArmor::where("name", "Opal Earrings")->first()->id;
        $zoraHelm = TotkArmor::where("name", "Zora Helm")->first()->id;
        $zoraArmor = TotkArmor::where("name", "Zora Armor")->first()->id;
        $zoraGreaves = TotkArmor::where("name", "Zora Greaves")->first()->id;
        $stealthMask = TotkArmor::where("name", "Stealth Mask")->first()->id;
        $stealthChestGuard = TotkArmor::where("name", "Stealth Chest Guard")->first()->id;
        $stealthTights = TotkArmor::where("name", "Stealth Tights")->first()->id;
        $sheiksMask = TotkArmor::where("name", "Sheik's Mask")->first()->id;
        $climbersBandanna = TotkArmor::where("name", "Climber's Bandanna")->first()->id;
        $climbingGear = TotkArmor::where("name", "Climbing Gear")->first()->id;
        $climbingBoots = TotkArmor::where("name", "Climbing Boots")->first()->id;
        $barbarianHelm = TotkArmor::where("name", "Barbarian Helm")->first()->id;
        $barbarianArmor = TotkArmor::where("name", "Barbarian Armor")->first()->id;
        $barbarianLegWraps = TotkArmor::where("name", "Barbarian Leg Wraps")->first()->id;
        $fierceDeityMask = TotkArmor::where("name", "Fierce Deity Mask")->first()->id;
        $fierceDeityArmor = TotkArmor::where("name", "Fierce Deity Armor")->first()->id;
        $fierceDeityBoots = TotkArmor::where("name", "Fierce Deity Boots")->first()->id;
        $radiantMask = TotkArmor::where("name", "Radiant Mask")->first()->id;
        $radiantShirt = TotkArmor::where("name", "Radiant Shirt")->first()->id;
        $radiantTights = TotkArmor::where("name", "Radiant Tights")->first()->id;
        $diamondCirclet = TotkArmor::where("name", "Diamond Circlet")->first()->id;
        $sandBoots = TotkArmor::where("name", "Sand Boots")->first()->id;
        $snowBoots = TotkArmor::where("name", "Snow Boots")->first()->id;
        $capOfTime = TotkArmor::where("name", "Cap of Time")->first()->id;
        $tunicOfTime = TotkArmor::where("name", "Tunic of Time")->first()->id;
        $trousersOfTime = TotkArmor::where("name", "Trousers of Time")->first()->id;
        $capOfTheWind = TotkArmor::where("name", "Cap of the Wind")->first()->id;
        $tunicOfTheWind = TotkArmor::where("name", "Tunic of the Wind")->first()->id;
        $trousersOfTheWind = TotkArmor::where("name", "Trousers of the Wind")->first()->id;
        $capOfTwilight = TotkArmor::where("name", "Cap of Twilight")->first()->id;
        $tunicOfTwilight = TotkArmor::where("name", "Tunic of Twilight")->first()->id;
        $trousersOfTwilight = TotkArmor::where("name", "Trousers of Twilight")->first()->id;
        $capOfTheSky = TotkArmor::where("name", "Cap of the Sky")->first()->id;
        $tunicOfTheSky = TotkArmor::where("name", "Tunic of the Sky")->first()->id;
        $trousersOfTheSky = TotkArmor::where("name", "Trousers of the Sky")->first()->id;
        $capOfTheHero = TotkArmor::where("name", "Cap of the Hero")->first()->id;
        $tunicOfTheHero = TotkArmor::where("name", "Tunic of the Hero")->first()->id;
        $trousersOfTheHero = TotkArmor::where("name", "Trousers of the Hero")->first()->id;
        $capOfTheWild = TotkArmor::where("name", "Cap of the Wild")->first()->id;
        $tunicOfTheWild = TotkArmor::where("name", "Tunic of the Wild")->first()->id;
        $trousersOfTheWild = TotkArmor::where("name", "Trousers of the Wild")->first()->id;
        $vahRutaDivineHelm = TotkArmor::where("name", "Vah Ruta Divine Helm")->first()->id;
        $vahMedohDivineHelm = TotkArmor::where("name", "Vah Medoh Divine Helm")->first()->id;
        $vahRudaniaDivineHelm = TotkArmor::where("name", "Vah Rudania Divine Helm")->first()->id;
        $vahNaborisDivineHelm = TotkArmor::where("name", "Vah Naboris Divine Helm")->first()->id;
        $glideMask = TotkArmor::where("name", "Glide Mask")->first()->id;
        $glideShirt = TotkArmor::where("name", "Glide Shirt")->first()->id;
        $glideTights = TotkArmor::where("name", "Glide Tights")->first()->id;
        $froggyHood = TotkArmor::where("name", "Froggy Hood")->first()->id;
        $froggySleeve = TotkArmor::where("name", "Froggy Sleeve")->first()->id;
        $froggyLeggings = TotkArmor::where("name", "Froggy Leggings")->first()->id;
        $minersMask = TotkArmor::where("name", "Miner's Mask")->first()->id;
        $minersTop = TotkArmor::where("name", "Miner's Top")->first()->id;
        $minersTrousers = TotkArmor::where("name", "Miner's Trousers")->first()->id;
        $emberHeaddress = TotkArmor::where("name", "Ember Headdress")->first()->id;
        $emberShirt = TotkArmor::where("name", "Ember Shirt")->first()->id;
        $emberTrousers = TotkArmor::where("name", "Ember Trousers")->first()->id;
        $chargedHeaddress = TotkArmor::where("name", "Charged Headdress")->first()->id;
        $chargedShirt = TotkArmor::where("name", "Charged Shirt")->first()->id;
        $chargedTrousers = TotkArmor::where("name", "Charged Trousers")->first()->id;
        $frostbiteHeaddress = TotkArmor::where("name", "Frostbite Headdress")->first()->id;
        $frostbiteShirt = TotkArmor::where("name", "Frostbite Shirt")->first()->id;
        $frostbiteTrousers = TotkArmor::where("name", "Frostbite Trousers")->first()->id;
        $zonaiteHelm = TotkArmor::where("name", "Zonaite Helm")->first()->id;
        $zonaiteWaistguard = TotkArmor::where("name", "Zonaite Waistguard")->first()->id;
        $zonaiteShinGuards = TotkArmor::where("name", "Zonaite Shin Guards")->first()->id;
        $maskOfAwakening = TotkArmor::where("name", "Mask of Awakening")->first()->id;
        $tunicOfAwakening = TotkArmor::where("name", "Tunic of Awakening")->first()->id;
        $trousersOfAwakening = TotkArmor::where("name", "Trousers of Awakening")->first()->id;
        $hoodOfTheDepths = TotkArmor::where("name", "Hood of the Depths")->first()->id;
        $tunicOfTheDepths = TotkArmor::where("name", "Tunic of the Depths")->first()->id;
        $gaitersOfTheDepths = TotkArmor::where("name", "Gaiters of the Depths")->first()->id;
        $tunicOfMemories = TotkArmor::where("name", "Tunic of Memories")->first()->id;
        $yigaMask = TotkArmor::where("name", "Yiga Mask")->first()->id;
        $yigaArmor = TotkArmor::where("name", "Yiga Armor")->first()->id;
        $yigaTights = TotkArmor::where("name", "Yiga Tights")->first()->id;
        $royalGuardCap = TotkArmor::where("name", "Royal Guard Cap")->first()->id;
        $royalGuardUniform = TotkArmor::where("name", "Royal Guard Uniform")->first()->id;
        $royalGuardBoots = TotkArmor::where("name", "Royal Guard Boots")->first()->id;

        // Resources
        $voltfruit = TotkResource::where("name", "Voltfruit")->first()->id;
        $mightyBananas = TotkResource::where("name", "Mighty Bananas")->first()->id;
        $fireFruit = TotkResource::where("name", "Fire Fruit")->first()->id;
        $iceFruit = TotkResource::where("name", "Ice Fruit")->first()->id;
        $shockFruit = TotkResource::where("name", "Shock Fruit")->first()->id;
        $dazzlefruit = TotkResource::where("name", "Dazzlefruit")->first()->id;
        $puffshroom = TotkResource::where("name", "Puffshroom")->first()->id;
        $rushroom = TotkResource::where("name", "Rushroom")->first()->id;
        $brightcap = TotkResource::where("name", "Brightcap")->first()->id;
        $chillshroom = TotkResource::where("name", "Chillshroom")->first()->id;
        $sunshroom = TotkResource::where("name", "Sunshroom")->first()->id;
        $zapshroom = TotkResource::where("name", "Zapshroom")->first()->id;
        $silentShroom = TotkResource::where("name", "Silent Shroom")->first()->id;
        $razorshroom = TotkResource::where("name", "Razorshroom")->first()->id;
        $swiftCarrot = TotkResource::where("name", "Swift Carrot")->first()->id;
        $silentPrincess = TotkResource::where("name", "Silent Princess")->first()->id;
        $coolSafflina = TotkResource::where("name", "Cool Safflina")->first()->id;
        $warmSafflina = TotkResource::where("name", "Warm Safflina")->first()->id;
        $electricSafflina = TotkResource::where("name", "Electric Safflina")->first()->id;
        $mightyThistle = TotkResource::where("name", "Mighty Thistle")->first()->id;
        $swiftViolet = TotkResource::where("name", "Swift Violet")->first()->id;
        $blueNightshade = TotkResource::where("name", "Blue Nightshade")->first()->id;
        $sundelion = TotkResource::where("name", "Sundelion")->first()->id;
        $courserBeeHoney = TotkResource::where("name", "Courser Bee Honey")->first()->id;
        $acorn = TotkResource::where("name", "Acorn")->first()->id;
        $darkClump = TotkResource::where("name", "Dark Clump")->first()->id;
        $starFragment = TotkResource::where("name", "Star Fragment")->first()->id;
        $heartyBass = TotkResource::where("name", "Hearty Bass")->first()->id;
        $hyruleBass = TotkResource::where("name", "Hyrule Bass")->first()->id;
        $stealthfinTrout = TotkResource::where("name", "Stealthfin Trout")->first()->id;
        $chillfinTrout = TotkResource::where("name", "Chillfin Trout")->first()->id;
        $sizzlefinTrout = TotkResource::where("name", "Sizzlefin Trout")->first()->id;
        $voltfinTrout = TotkResource::where("name", "Voltfin Trout")->first()->id;
        $glowingCaveFish = TotkResource::where("name", "Glowing Cave Fish")->first()->id;
        $razorclawCrab = TotkResource::where("name", "Razorclaw Crab")->first()->id;
        $sneakyRiverSnail = TotkResource::where("name", "Sneaky River Snail")->first()->id;
        $winterwingButterfly = TotkResource::where("name", "Winterwing Butterfly")->first()->id;
        $summerwingButterfly = TotkResource::where("name", "Summerwing Butterfly")->first()->id;
        $thunderwingButterfly = TotkResource::where("name", "Thunderwing Butterfly")->first()->id;
        $smotherwingButterfly = TotkResource::where("name", "Smotherwing Butterfly")->first()->id;
        $coldDarner = TotkResource::where("name", "Cold Darner")->first()->id;
        $warmDarner = TotkResource::where("name", "Warm Darner")->first()->id;
        $electricDarner = TotkResource::where("name", "Electric Darner")->first()->id;
        $bladedRhinoBeetle = TotkResource::where("name", "Bladed Rhino Beetle")->first()->id;
        $energeticRhinoBeetle = TotkResource::where("name", "Energetic Rhino Beetle")->first()->id;
        $sunsetFirefly = TotkResource::where("name", "Sunset Firefly")->first()->id;
        $deepFirefly = TotkResource::where("name", "Deep Firefly")->first()->id;
        $hotFootedFrog = TotkResource::where("name", "Hot-Footed Frog")->first()->id;
        $stickyFrog = TotkResource::where("name", "Sticky Frog")->first()->id;
        $hightailLizard = TotkResource::where("name", "Hightail Lizard")->first()->id;
        $heartyLizard = TotkResource::where("name", "Hearty Lizard")->first()->id;
        $fireproofLizard = TotkResource::where("name", "Fireproof Lizard")->first()->id;
        $stickyLizard = TotkResource::where("name", "Sticky Lizard")->first()->id;
        $diamond = TotkResource::where("name", "Diamond")->first()->id;
        $ruby = TotkResource::where("name", "Ruby")->first()->id;
        $sapphire = TotkResource::where("name", "Sapphire")->first()->id;
        $topaz = TotkResource::where("name", "Topaz")->first()->id;
        $opal = TotkResource::where("name", "Opal")->first()->id;
        $amber = TotkResource::where("name", "Amber")->first()->id;
        $luminousStone = TotkResource::where("name", "Luminous Stone")->first()->id;
        $flint = TotkResource::where("name", "Flint")->first()->id;
        $bokoblinGuts = TotkResource::where("name", "Bokoblin Guts")->first()->id;
        $moblinGuts = TotkResource::where("name", "Moblin Guts")->first()->id;
        $horriblinGuts = TotkResource::where("name", "Horriblin Guts")->first()->id;
        $hinoxGuts = TotkResource::where("name", "Hinox Guts")->first()->id;
        $lynelGuts = TotkResource::where("name", "Lynel Guts")->first()->id;
        $moldugaGuts = TotkResource::where("name", "Molduga Guts")->first()->id;
        $gibdoGuts = TotkResource::where("name", "Gibdo Guts")->first()->id;
        $froxGuts = TotkResource::where("name", "Frox Guts")->first()->id;
        $gleeokGuts = TotkResource::where("name", "Gleeok Guts")->first()->id;
        $redChuchuJelly = TotkResource::where("name", "Red Chuchu Jelly")->first()->id;
        $whiteChuchuJelly = TotkResource::where("name", "White Chuchu Jelly")->first()->id;
        $yellowChuchuJelly = TotkResource::where("name", "Yellow Chuchu Jelly")->first()->id;
        $chuchuJelly = TotkResource::where("name", "Chuchu Jelly")->first()->id;
        $keeseEyeball = TotkResource::where("name", "Keese Eyeball")->first()->id;
        $octorokEyeball = TotkResource::where("name", "Octorok Eyeball")->first()->id;
        $aerocudaEyeball = TotkResource::where("name", "Aerocuda Eyeball")->first()->id;
        $keeseWing = TotkResource::where("name", "Keese Wing")->first()->id;
        $fireKeeseWing = TotkResource::where("name", "Fire Keese Wing")->first()->id;
        $iceKeeseWing = TotkResource::where("name", "Ice Keese Wing")->first()->id;
        $electricKeeseWing = TotkResource::where("name", "Electric Keese Wing")->first()->id;
        $aerocudaWing = TotkResource::where("name", "Aerocuda Wing")->first()->id;
        $gibdoWing = TotkResource::where("name", "Gibdo Wing")->first()->id;
        $gleeokWing = TotkResource::where("name", "Gleeok Wing")->first()->id;
        $bokoblinHorn = TotkResource::where("name", "Bokoblin Horn")->first()->id;
        $blueBokoblinHorn = TotkResource::where("name", "Blue Bokoblin Horn")->first()->id;
        $blackBokoblinHorn = TotkResource::where("name", "Black Bokoblin Horn")->first()->id;
        $silverBokoblinHorn = TotkResource::where("name", "Silver Bokoblin Horn")->first()->id;
        $bossBokoblinHorn = TotkResource::where("name", "Boss Bokoblin Horn")->first()->id;
        $blueBossBokoblinHorn = TotkResource::where("name", "Blue Boss Bokoblin Horn")->first()->id;
        $blackBossBokoblinHorn = TotkResource::where("name", "Black Boss Bokoblin Horn")->first()->id;
        $silverBossBokoblinHorn = TotkResource::where("name", "Silver Boss Bokoblin Horn")->first()->id;
        $lizalfosHorn = TotkResource::where("name", "Lizalfos Horn")->first()->id;
        $blueLizalfosHorn = TotkResource::where("name", "Blue Lizalfos Horn")->first()->id;
        $blackLizalfosHorn = TotkResource::where("name", "Black Lizalfos Horn")->first()->id;
        $fireBreathLizalfosHorn = TotkResource::where("name", "Fire-Breath Lizalfos Horn")->first()->id;
        $iceBreathLizalfosHorn = TotkResource::where("name", "Ice-Breath Lizalfos Horn")->first()->id;
        $electricLizalfosHorn = TotkResource::where("name", "Electric Lizalfos Horn")->first()->id;
        $soldierConstructHorn = TotkResource::where("name", "Soldier Construct Horn")->first()->id;
        $soldierConstruct2Horn = TotkResource::where("name", "Soldier Construct II Horn")->first()->id;
        $soldierConstruct3Horn = TotkResource::where("name", "Soldier Construct III Horn")->first()->id;
        $soldierConstruct4Horn = TotkResource::where("name", "Soldier Construct IV Horn")->first()->id;
        $captainConstruct1Horn = TotkResource::where("name", "Captain Construct I Horn")->first()->id;
        $captainConstruct2Horn = TotkResource::where("name", "Captain Construct II Horn")->first()->id;
        $captainConstruct3Horn = TotkResource::where("name", "Captain Construct III Horn")->first()->id;
        $hinoxToenail = TotkResource::where("name", "Hinox Toenail")->first()->id;
        $froxFingernail = TotkResource::where("name", "Frox Fingernail")->first()->id;
        $fireLikeStone = TotkResource::where("name", "Fire Like Stone")->first()->id;
        $iceLikeStone = TotkResource::where("name", "Ice Like Stone")->first()->id;
        $shockLikeStone = TotkResource::where("name", "Shock Like Stone")->first()->id;
        $moblinHorn = TotkResource::where("name", "Moblin Horn")->first()->id;
        $blueMoblinHorn = TotkResource::where("name", "Blue Moblin Horn")->first()->id;
        $horriblinHorn = TotkResource::where("name", "Horriblin Horn")->first()->id;
        $blueHorriblinHorn = TotkResource::where("name", "Blue Horriblin Horn")->first()->id;
        $blackHorriblinHorn = TotkResource::where("name", "Black Horriblin Horn")->first()->id;
        $blackHinoxHorn = TotkResource::where("name", "Black Hinox Horn")->first()->id;
        $lynelSaberHorn = TotkResource::where("name", "Lynel Saber Horn")->first()->id;
        $lynelMaceHorn = TotkResource::where("name", "Lynel Mace Horn")->first()->id;
        $blueManedLynelSaberHorn = TotkResource::where("name", "Blue-Maned Lynel Saber Horn")->first()->id;
        $blueManedLynelMaceHorn = TotkResource::where("name", "Blue-Maned Lynel Mace Horn")->first()->id;
        $whiteManedLynelSaberHorn = TotkResource::where("name", "White-Maned Lynel Saber Horn")->first()->id;
        $whiteManedLynelMaceHorn = TotkResource::where("name", "White-Maned Lynel Mace Horn")->first()->id;
        $gleeokFlameHorn = TotkResource::where("name", "Gleeok Flame Horn")->first()->id;
        $gleeokFrostHorn = TotkResource::where("name", "Gleeok Frost Horn")->first()->id;
        $gleeokThunderHorn = TotkResource::where("name", "Gleeok Thunder Horn")->first()->id;
        $lizalfosTail = TotkResource::where("name", "Lizalfos Tail")->first()->id;
        $blueLizalfosTail = TotkResource::where("name", "Blue Lizalfos Tail")->first()->id;
        $fireBreathLizalfosTail = TotkResource::where("name", "Fire-Breath Lizalfos Tail")->first()->id;
        $iceBreathLizalfosTail = TotkResource::where("name", "Ice-Breath Lizalfos Tail")->first()->id;
        $electricLizalfosTail = TotkResource::where("name", "Electric Lizalfos Tail")->first()->id;
        $bokoblinFang = TotkResource::where("name", "Bokoblin Fang")->first()->id;
        $moblinFang = TotkResource::where("name", "Moblin Fang")->first()->id;
        $bossBokoblinFang = TotkResource::where("name", "Boss Bokoblin Fang")->first()->id;
        $froxFang = TotkResource::where("name", "Frox Fang")->first()->id;
        $obsidianFroxFang = TotkResource::where("name", "Obsidian Frox Fang")->first()->id;
        $blueWhiteFroxFang = TotkResource::where("name", "Blue-White Frox Fang")->first()->id;
        $hinoxTooth = TotkResource::where("name", "Hinox Tooth")->first()->id;
        $lizalfosTalon = TotkResource::where("name", "Lizalfos Talon")->first()->id;
        $lynelHoof = TotkResource::where("name", "Lynel Hoof")->first()->id;
        $octorokTentacle = TotkResource::where("name", "Octorok Tentacle")->first()->id;
        $octoBalloon = TotkResource::where("name", "Octo Balloon")->first()->id;
        $moldugaFin = TotkResource::where("name", "Molduga Fin")->first()->id;
        $gibdoBone = TotkResource::where("name", "Gibdo Bone")->first()->id;
        $moldugaJaw = TotkResource::where("name", "Molduga Jaw")->first()->id;
        $dinraalsScale = TotkResource::where("name", "Dinraal's Scale")->first()->id;
        $dinraalsClaw = TotkResource::where("name", "Dinraal's Claw")->first()->id;
        $shardOfDinraalsFang = TotkResource::where("name", "Shard of Dinraal's Fang")->first()->id;
        $dinraalsHorn = TotkResource::where("name", "Dinraal's Horn")->first()->id;
        $naydrasScale = TotkResource::where("name", "Naydra's Scale")->first()->id;
        $naydrasClaw = TotkResource::where("name", "Naydra's Claw")->first()->id;
        $shardOfNaydrasFang = TotkResource::where("name", "Shard of Naydra's Fang")->first()->id;
        $naydrasHorn = TotkResource::where("name", "Naydra's Horn")->first()->id;
        $faroshsScale = TotkResource::where("name", "Farosh's Scale")->first()->id;
        $faroshsClaw = TotkResource::where("name", "Farosh's Claw")->first()->id;
        $shardOfFaroshsFang = TotkResource::where("name", "Shard of Farosh's Fang")->first()->id;
        $faroshsHorn = TotkResource::where("name", "Farosh's Horn")->first()->id;
        $shardOfFaroshsSpike = TotkResource::where("name", "Shard of Farosh's Spike")->first()->id;
        $lightDragonsScale = TotkResource::where("name", "Light Dragon's Scale")->first()->id;
        $lightDragonsTalon = TotkResource::where("name", "Light Dragon's Talon")->first()->id;
        $shardOfLightDragonsFang = TotkResource::where("name", "Shard of Light Dragon's Fang")->first()->id;
        $lightDragonsHorn = TotkResource::where("name", "Light Dragon's Horn")->first()->id;
        $brightbloomSeed = TotkResource::where("name", "Brightbloom Seed")->first()->id;
        $giantBrightbloomSeed = TotkResource::where("name", "Giant Brightbloom Seed")->first()->id;
        $zonaite = TotkResource::where("name", "Zonaite")->first()->id;
        $largeZonaite = TotkResource::where("name", "Large Zonaite")->first()->id;
        $largeZonaiCharge = TotkResource::where("name", "Large Zonai Charge")->first()->id;

        $armorResources = new Collection();

        $armorResources->push(
            $this->buildArmorRequirements($championsTunic, collect([
                [1, $silentPrincess, 3],
                [1, $lightDragonsScale, 2],
                [2, $silentPrincess, 3],
                [2, $lightDragonsTalon, 2],
                [2, $sundelion, 10],
                [3, $silentPrincess, 5],
                [3, $shardOfLightDragonsFang, 2],
                [3, $sundelion, 15],
                [4, $silentPrincess, 10],
                [4, $lightDragonsHorn, 2],
                [4, $sundelion, 20],
            ])),
        );

        // Hylian Set
        $hylianData = collect([
            [1, $bokoblinHorn, 5],
            [2, $blueBokoblinHorn, 5],
            [2, $bokoblinFang, 3],
            [3, $amber, 20],
            [3, $bokoblinGuts, 3],
            [3, $blackBokoblinHorn, 5],
            [4, $amber, 30],
            [4, $bokoblinGuts, 5],
            [4, $silverBokoblinHorn, 5],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($hylianHood, $hylianData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($hylianTunic, $hylianData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($hylianTrousers, $hylianData),
        );

        // Soldier's Set
        $soldiersData = collect([
            [1, $chuchuJelly, 5],
            [1, $bokoblinGuts, 3],
            [2, $keeseEyeball, 5],
            [2, $moblinGuts, 3],
            [3, $flint, 30],
            [3, $lizalfosTail, 3],
            [3, $hinoxGuts, 3],
            [4, $lynelHoof, 5],
            [4, $lynelGuts, 5],
            [4, $amber, 30],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($soldiersHelm, $soldiersData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($soldiersArmor, $soldiersData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($soldiersGreaves, $soldiersData),
        );

        $armorResources->push(
            $this->buildArmorRequirements($amberEarrings, collect([
                [1, $amber, 10],
                [1, $flint, 5],
                [2, $amber, 20],
                [2, $flint, 10],
                [3, $amber, 35],
                [3, $flint, 15],
                [4, $amber, 60],
                [4, $flint, 25],
            ])),
        );

        $armorResources->push(
            $this->buildArmorRequirements($rubyCirclet, collect([
                [1, $ruby, 2],
                [1, $flint, 3],
                [2, $ruby, 4],
                [2, $flint, 5],
                [3, $ruby, 6],
                [3, $starFragment, 1],
                [4, $ruby, 10],
                [4, $starFragment, 2],
            ])),
        );

        // Snowquill Set
        $snowquillData = collect([
            [1, $redChuchuJelly, 3],
            [2, $redChuchuJelly, 5],
            [2, $warmSafflina, 3],
            [3, $sunshroom, 5],
            [3, $fireKeeseWing, 5],
            [3, $fireBreathLizalfosTail, 3],
            [4, $ruby, 5],
            [4, $fireBreathLizalfosHorn, 5],
            [4, $fireBreathLizalfosTail, 10],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($snowquillHeaddress, $snowquillData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($snowquillTunic, $snowquillData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($snowquillTrousers, $snowquillData),
        );

        $armorResources->push(
            $this->buildArmorRequirements($sapphireCirclet, collect([
                [1, $sapphire, 2],
                [1, $flint, 3],
                [2, $sapphire, 4],
                [2, $flint, 5],
                [3, $sapphire, 6],
                [3, $starFragment, 1],
                [4, $sapphire, 10],
                [4, $starFragment, 2],
            ])),
        );

        // Desert Voe Set
        $desertVoeData = collect([
            [1, $whiteChuchuJelly, 3],
            [2, $whiteChuchuJelly, 5],
            [2, $coolSafflina, 3],
            [3, $chillshroom, 5],
            [3, $iceKeeseWing, 5],
            [3, $iceBreathLizalfosTail, 3],
            [4, $iceBreathLizalfosHorn, 5],
            [4, $iceBreathLizalfosTail, 10],
            [4, $sapphire, 5],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($desertVoeHeadband, $desertVoeData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($desertVoeSpaulder, $desertVoeData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($desertVoeTrousers, $desertVoeData),
        );

        // Flamebreaker Set
        $flamebreakerData = collect([
            [1, $moblinHorn, 3],
            [2, $moblinFang, 5],
            [2, $fireproofLizard, 5],
            [3, $blueMoblinHorn, 5],
            [3, $flint, 15],
            [3, $smotherwingButterfly, 3],
            [4, $fireBreathLizalfosHorn, 5],
            [4, $fireBreathLizalfosTail, 10],
            [4, $ruby, 5],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($flamebreakerHelm, $flamebreakerData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($flamebreakerArmor, $flamebreakerData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($flamebreakerBoots, $flamebreakerData),
        );

        $armorResources->push(
            $this->buildArmorRequirements($topazEarrings, collect([
                [1, $topaz, 2],
                [1, $flint, 3],
                [2, $topaz, 4],
                [2, $flint, 5],
                [3, $topaz, 6],
                [3, $starFragment, 1],
                [4, $topaz, 10],
                [4, $starFragment, 2],
            ])),
        );

        // Rubber Set
        $rubberData = collect([
            [1, $yellowChuchuJelly, 3],
            [1, $electricLizalfosHorn, 1],
            [2, $yellowChuchuJelly, 8],
            [2, $voltfruit, 5],
            [3, $zapshroom, 5],
            [3, $electricLizalfosTail, 5],
            [3, $electricSafflina, 8],
            [4, $topaz, 5],
            [4, $electricLizalfosHorn, 5],
            [4, $electricLizalfosTail, 8],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($rubberHelm, $rubberData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($rubberArmor, $rubberData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($rubberTights, $rubberData),
        );

        $armorResources->push(
            $this->buildArmorRequirements($opalEarrings, collect([
                [1, $opal, 6],
                [1, $flint, 5],
                [2, $opal, 12],
                [2, $flint, 10],
                [3, $opal, 18],
                [3, $flint, 15],
                [4, $opal, 30],
                [4, $flint, 25],
            ])),
        );

        // Zora Set
        $zoraData = collect([
            [1, $lizalfosHorn, 3],
            [2, $hyruleBass, 5],
            [2, $lizalfosTalon, 5],
            [3, $heartyBass, 3],
            [3, $lizalfosTail, 3],
            [3, $blueLizalfosHorn, 5],
            [4, $blackLizalfosHorn, 5],
            [4, $blueLizalfosTail, 5],
            [4, $opal, 20],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($zoraHelm, $zoraData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($zoraArmor, $zoraData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($zoraGreaves, $zoraData),
        );

        // Stealth Set
        $stealthData = collect([
            [1, $blueNightshade, 3],
            [2, $sunsetFirefly, 5],
            [2, $blueNightshade, 5],
            [3, $silentShroom, 8],
            [3, $sneakyRiverSnail, 5],
            [4, $sundelion, 10],
            [4, $stealthfinTrout, 10],
            [4, $silentPrincess, 5],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($stealthMask, $stealthData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($stealthChestGuard, $stealthData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($stealthTights, $stealthData),
        );

        $armorResources->push(
            $this->buildArmorRequirements($sheiksMask, collect([
                [1, $silentPrincess, 1],
                [1, $starFragment, 1],
                [2, $silentPrincess, 2],
                [2, $starFragment, 2],
                [3, $silentPrincess, 4],
                [3, $starFragment, 3],
                [4, $silentPrincess, 8],
                [4, $starFragment, 4],
            ])),
        );

        // Climbing Set
        $climbingData = collect([
            [1, $keeseWing, 3],
            [1, $rushroom, 3],
            [2, $electricKeeseWing, 5],
            [2, $hightailLizard, 5],
            [3, $hotFootedFrog, 10],
            [3, $iceKeeseWing, 8],
            [4, $swiftViolet, 20],
            [4, $fireKeeseWing, 10],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($climbersBandanna, $climbingData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($climbingGear, $climbingData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($climbingBoots, $climbingData),
        );

        // Barbarian Set
        $barbarianData = collect([
            [1, $mightyThistle, 3],
            [2, $razorshroom, 5],
            [2, $lynelSaberHorn, 2],
            [2, $lynelMaceHorn, 2],
            [3, $blueManedLynelSaberHorn, 3],
            [3, $blueManedLynelMaceHorn, 3],
            [3, $razorclawCrab, 3],
            [4, $whiteManedLynelSaberHorn, 3],
            [4, $whiteManedLynelMaceHorn, 3],
            [4, $bladedRhinoBeetle, 3],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($barbarianHelm, $barbarianData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($barbarianArmor, $barbarianData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($barbarianLegWraps, $barbarianData),
        );

        // Fierce Deity Set
        $fierceDeityData = collect([
            [1, $hinoxToenail, 5],
            [1, $dinraalsScale, 1],
            [2, $hinoxTooth, 5],
            [2, $dinraalsClaw, 1],
            [3, $hinoxGuts, 2],
            [3, $shardOfDinraalsFang, 1],
            [4, $lynelGuts, 2],
            [4, $dinraalsHorn, 1],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($fierceDeityMask, $fierceDeityData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($fierceDeityArmor, $fierceDeityData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($fierceDeityBoots, $fierceDeityData),
        );

        // Radiant Set
        $radiantData = collect([
            [1, $luminousStone, 10],
            [1, $bokoblinGuts, 1],
            [2, $luminousStone, 15],
            [2, $moblinGuts, 2],
            [3, $luminousStone, 20],
            [3, $horriblinGuts, 3],
            [3, $gibdoBone, 10],
            [4, $luminousStone, 30],
            [4, $lynelGuts, 3],
            [4, $moldugaJaw, 3],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($radiantMask, $radiantData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($radiantShirt, $radiantData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($radiantTights, $radiantData),
        );

        $armorResources->push(
            $this->buildArmorRequirements($diamondCirclet, collect([
                [1, $diamond, 2],
                [1, $flint, 3],
                [2, $diamond, 3],
                [2, $flint, 5],
                [3, $diamond, 5],
                [3, $starFragment, 1],
                [4, $diamond, 8],
                [4, $starFragment, 2],
            ])),
        );

        $armorResources->push(
            $this->buildArmorRequirements($sandBoots, collect([
                [1, $hightailLizard, 3],
                [2, $gibdoBone, 20],
                [2, $swiftCarrot, 5],
                [3, $gibdoGuts, 5],
                [3, $rushroom, 10],
                [3, $moldugaFin, 5],
                [4, $moldugaGuts, 5],
                [4, $swiftViolet, 10],
                [4, $heartyLizard, 5],
            ])),
        );

        $armorResources->push(
            $this->buildArmorRequirements($snowBoots, collect([
                [1, $hightailLizard, 3],
                [2, $octorokTentacle, 5],
                [2, $swiftCarrot, 5],
                [3, $octoBalloon, 5],
                [3, $rushroom, 20],
                [4, $naydrasScale, 2],
                [4, $swiftViolet, 20],
            ])),
        );

        // Hero of Time Set
        $heroOfTimeData = collect([
            [1, $amber, 10],
            [1, $starFragment, 1],
            [2, $amber, 20],
            [2, $starFragment, 1],
            [3, $amber, 30],
            [3, $starFragment, 1],
            [4, $amber, 40],
            [4, $starFragment, 1],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($capOfTime, $heroOfTimeData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($tunicOfTime, $heroOfTimeData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($trousersOfTime, $heroOfTimeData),
        );

        // Hero of Winds Set
        $heroOfTheWindsData = collect([
            [1, $opal, 5],
            [1, $starFragment, 1],
            [2, $opal, 10],
            [2, $starFragment, 1],
            [3, $opal, 15],
            [3, $starFragment, 1],
            [4, $opal, 25],
            [4, $starFragment, 1],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($capOfTheWind, $heroOfTheWindsData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($tunicOfTheWind, $heroOfTheWindsData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($trousersOfTheWind, $heroOfTheWindsData),
        );

        // Hero of Twilight Set
        $heroOfTwilightData = collect([
            [1, $topaz, 1],
            [1, $starFragment, 1],
            [2, $topaz, 4],
            [2, $starFragment, 1],
            [3, $topaz, 6],
            [3, $starFragment, 1],
            [4, $topaz, 10],
            [4, $starFragment, 1],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($capOfTwilight, $heroOfTwilightData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($tunicOfTwilight, $heroOfTwilightData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($trousersOfTwilight, $heroOfTwilightData),
        );

        // Hero of the Sky Set
        $heroOfTheSkyData = collect([
            [1, $sapphire, 1],
            [1, $starFragment, 1],
            [2, $sapphire, 4],
            [2, $starFragment, 1],
            [3, $sapphire, 6],
            [3, $starFragment, 1],
            [4, $sapphire, 10],
            [4, $starFragment, 1],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($capOfTheSky, $heroOfTheSkyData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($tunicOfTheSky, $heroOfTheSkyData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($trousersOfTheSky, $heroOfTheSkyData),
        );

        // Hero Set
        $heroData = collect([
            [1, $ruby, 1],
            [1, $starFragment, 1],
            [2, $ruby, 4],
            [2, $starFragment, 1],
            [3, $ruby, 6],
            [3, $starFragment, 1],
            [4, $ruby, 10],
            [4, $starFragment, 1],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($capOfTheHero, $heroData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($tunicOfTheHero, $heroData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($trousersOfTheHero, $heroData),
        );

        // Hero of the Wild Set
        $heroOfTheWildData = collect([
            [1, $acorn, 10],
            [1, $faroshsScale, 2],
            [2, $courserBeeHoney, 5],
            [2, $faroshsClaw, 2],
            [3, $energeticRhinoBeetle, 3],
            [3, $shardOfFaroshsFang, 2],
            [3, $shardOfFaroshsSpike, 5],
            [4, $starFragment, 3],
            [4, $faroshsHorn, 2],
            [4, $shardOfFaroshsSpike, 10],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($capOfTheWild, $heroOfTheWildData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($tunicOfTheWild, $heroOfTheWildData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($trousersOfTheWild, $heroOfTheWildData),
        );

        // Divine Helms
        $divineHelmData = collect([
            [1, $zonaite, 5],
            [2, $zonaite, 10],
            [3, $largeZonaite, 5],
            [3, $dazzlefruit, 5],
            [4, $largeZonaite, 10],
            [4, $dazzlefruit, 10],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($vahRutaDivineHelm, $divineHelmData->concat([
                [1, $opal, 5],
                [2, $opal, 10],
                [3, $opal, 15],
                [4, $opal, 25],
            ])),
        );
        $armorResources->push(
            $this->buildArmorRequirements($vahMedohDivineHelm, $divineHelmData->concat([
                [1, $sapphire, 1],
                [2, $sapphire, 4],
                [3, $sapphire, 6],
                [4, $sapphire, 10],
            ])),
        );
        $armorResources->push(
            $this->buildArmorRequirements($vahRudaniaDivineHelm, $divineHelmData->concat([
                [1, $ruby, 1],
                [2, $ruby, 4],
                [3, $ruby, 6],
                [4, $ruby, 10],
            ])),
        );
        $armorResources->push(
            $this->buildArmorRequirements($vahNaborisDivineHelm, $divineHelmData->concat([
                [1, $topaz, 1],
                [2, $topaz, 4],
                [3, $topaz, 6],
                [4, $topaz, 10],
            ])),
        );

        // Glide Set
        $glideData = collect([
            [1, $keeseWing, 3],
            [2, $aerocudaWing, 5],
            [2, $aerocudaEyeball, 6],
            [3, $aerocudaWing, 6],
            [3, $aerocudaEyeball, 8],
            [4, $aerocudaWing, 10],
            [4, $gibdoWing, 8],
            [4, $gleeokWing, 12],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($glideMask, $glideData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($glideShirt, $glideData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($glideTights, $glideData),
        );

        // Froggy Set
        $froggyData = collect([
            [1, $stickyLizard, 3],
            [2, $stickyLizard, 5],
            [2, $horriblinHorn, 5],
            [3, $blueHorriblinHorn, 5],
            [3, $stickyFrog, 5],
            [4, $blackHorriblinHorn, 5],
            [4, $horriblinGuts, 10],
            [4, $opal, 10],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($froggyHood, $froggyData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($froggySleeve, $froggyData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($froggyLeggings, $froggyData),
        );

        // Miner's Set
        $minersData = collect([
            [1, $brightbloomSeed, 10],
            [2, $brightbloomSeed, 20],
            [2, $brightcap, 5],
            [3, $giantBrightbloomSeed, 15],
            [3, $deepFirefly, 10],
            [3, $glowingCaveFish, 5],
            [4, $giantBrightbloomSeed, 20],
            [4, $largeZonaite, 10],
            [4, $diamond, 3],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($minersMask, $minersData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($minersTop, $minersData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($minersTrousers, $minersData),
        );

        // Ember Set
        $emberData = collect([
            [1, $fireFruit, 3],
            [2, $fireBreathLizalfosHorn, 5],
            [2, $summerwingButterfly, 5],
            [3, $fireLikeStone, 5],
            [3, $warmDarner, 5],
            [3, $largeZonaiCharge, 5],
            [4, $gleeokFlameHorn, 5],
            [4, $sizzlefinTrout, 10],
            [4, $largeZonaiCharge, 10],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($emberHeaddress, $emberData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($emberShirt, $emberData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($emberTrousers, $emberData),
        );

        // Charged Set
        $chargedData = collect([
            [1, $shockFruit, 3],
            [2, $thunderwingButterfly, 3],
            [2, $electricLizalfosHorn, 5],
            [3, $shockLikeStone, 5],
            [3, $electricDarner, 5],
            [3, $largeZonaiCharge, 5],
            [4, $gleeokThunderHorn, 5],
            [4, $voltfinTrout, 10],
            [4, $largeZonaiCharge, 5],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($chargedHeaddress, $chargedData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($chargedShirt, $chargedData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($chargedTrousers, $chargedData),
        );

        // Frostbite Set
        $frostbiteData = collect([
            [1, $iceFruit, 3],
            [2, $iceBreathLizalfosHorn, 5],
            [2, $winterwingButterfly, 5],
            [3, $iceLikeStone, 5],
            [3, $coldDarner, 5],
            [3, $largeZonaiCharge, 5],
            [4, $gleeokFrostHorn, 5],
            [4, $chillfinTrout, 10],
            [4, $largeZonaiCharge, 10],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($frostbiteHeaddress, $frostbiteData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($frostbiteShirt, $frostbiteData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($frostbiteTrousers, $frostbiteData),
        );

        // Zonaite Set
        $zonaiteData = collect([
            [1, $soldierConstructHorn, 5],
            [2, $soldierConstruct2Horn, 5],
            [2, $zonaite, 5],
            [2, $captainConstruct1Horn, 5],
            [3, $largeZonaite, 5],
            [3, $captainConstruct2Horn, 5],
            [3, $soldierConstruct3Horn, 5],
            [4, $largeZonaite, 10],
            [4, $captainConstruct3Horn, 5],
            [4, $soldierConstruct4Horn, 5],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($zonaiteHelm, $zonaiteData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($zonaiteWaistguard, $zonaiteData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($zonaiteShinGuards, $zonaiteData),
        );

        // Awakening Set
        $awakeningData = collect([
            [1, $luminousStone, 10],
            [1, $starFragment, 1],
            [2, $luminousStone, 15],
            [2, $starFragment, 1],
            [3, $luminousStone, 20],
            [3, $starFragment, 1],
            [4, $luminousStone, 30],
            [4, $starFragment, 1],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($maskOfAwakening, $awakeningData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($tunicOfAwakening, $awakeningData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($trousersOfAwakening, $awakeningData),
        );

        // Depths Set
        $depthsData = collect([
            [1, $deepFirefly, 3],
            [2, $darkClump, 5],
            [2, $froxFang, 3],
            [3, $zonaite, 20],
            [3, $froxFingernail, 3],
            [3, $obsidianFroxFang, 3],
            [4, $blueWhiteFroxFang, 5],
            [4, $largeZonaite, 10],
            [4, $froxGuts, 3],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($hoodOfTheDepths, $depthsData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($tunicOfTheDepths, $depthsData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($gaitersOfTheDepths, $depthsData),
        );

        $armorResources->push(
            $this->buildArmorRequirements($tunicOfMemories, collect([
                [1, $silentPrincess, 3],
                [1, $lightDragonsScale, 1],
                [2, $silentPrincess, 3],
                [2, $lightDragonsTalon, 1],
                [2, $faroshsHorn, 2],
                [3, $silentPrincess, 5],
                [3, $shardOfLightDragonsFang, 1],
                [3, $naydrasHorn, 2],
                [4, $silentPrincess, 10],
                [4, $lightDragonsHorn, 1],
                [4, $dinraalsHorn, 2],
            ])),
        );

        // Yiga Set
        $yigaData = collect([
            [1, $octorokEyeball, 2],
            [2, $puffshroom, 3],
            [2, $fireBreathLizalfosTail, 3],
            [3, $iceBreathLizalfosTail, 5],
            [3, $keeseEyeball, 5],
            [4, $electricLizalfosTail, 5],
            [4, $blackHinoxHorn, 3],
            [4, $mightyBananas, 10],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($yigaMask, $yigaData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($yigaArmor, $yigaData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($yigaTights, $yigaData),
        );

        // Royal Guard Set
        $royalGuardData = collect([
            [1, $bokoblinGuts, 3],
            [1, $bossBokoblinHorn, 3],
            [2, $blueBossBokoblinHorn, 3],
            [2, $bossBokoblinFang, 3],
            [3, $blackBossBokoblinHorn, 3],
            [3, $hinoxGuts, 3],
            [4, $silverBossBokoblinHorn, 3],
            [4, $moldugaGuts, 3],
            [4, $gleeokGuts, 3],
        ]);
        $armorResources->push(
            $this->buildArmorRequirements($royalGuardCap, $royalGuardData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($royalGuardUniform, $royalGuardData),
        );
        $armorResources->push(
            $this->buildArmorRequirements($royalGuardBoots, $royalGuardData),
        );

        // Populate the database.
        $armorResources = $armorResources->flatten(1);
        DB::table("totk_armor_resource")->insert($armorResources->toArray());
    }

    /**
     * Given an ID of the Armor from the `armors` table and the various requirements needed to
     * upgrade it to various tiers, this function will convert it into a proper Collection
     * ready for inserting into the database table.
     *
     * @param integer $armorId The ID of the Armor in the `armors` table
     * @param Collection $requirements A collection of three-item arrays detailing the requirements
     * @return Collection The armor and its requirements formatted for entering into the database
     */
    private function buildArmorRequirements(
        int $armorId,
        Collection $requirements,
    ): Collection {
        return collect(
            $requirements->map(function ($requirement) use ($armorId) {
                return [
                    "totk_armor_id" => $armorId,
                    "totk_resource_id" => $requirement[1],
                    "tier" => $requirement[0],
                    "quantity_needed" => $requirement[2],
                    "created_at" => now(),
                    "updated_at" => now(),
                ];
            }),
        );
    }
}
