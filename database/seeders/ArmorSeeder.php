<?php

namespace Database\Seeders;

use App\Models\Armor;
use App\Models\ArmorSet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArmorSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the Armors table.
     */
    public function run(): void
    {
        $prefix = "armors";

        $wellWornOutfit = ArmorSet::where("name", "Well-Worn Outfit")->first()
            ->id;
        $hylianSet = ArmorSet::where("name", "Hylian Set")->first()->id;
        $soldiersSet = ArmorSet::where("name", "Soldier's Set")->first()->id;
        $snowquillSet = ArmorSet::where("name", "Snowquill Set")->first()->id;
        $desertVoeSet = ArmorSet::where("name", "Desert Voe Set")->first()->id;
        $gerudoSet = ArmorSet::where("name", "Gerudo Set")->first()->id;
        $rubberSet = ArmorSet::where("name", "Rubber Set")->first()->id;
        $flamebreakerSet = ArmorSet::where("name", "Flamebreaker Set")->first()->id;
        $zoraSet = ArmorSet::where("name", "Zora Set")->first()->id;
        $stealthSet = ArmorSet::where("name", "Stealth Set")->first()->id;
        $climbingSet = ArmorSet::where("name", "Climbing Set")->first()->id;
        $barbarianSet = ArmorSet::where("name", "Barbarian Set")->first()->id;
        $fierceDeitySet = ArmorSet::where("name", "Fierce Deity Set")->first()->id;
        $radiantSet = ArmorSet::where("name", "Radiant Set")->first()->id;
        $darkSet = ArmorSet::where("name", "Dark Set")->first()->id;
        $heroOfTimeSet = ArmorSet::where("name", "Hero of Time Set")->first()->id;
        $heroOfWindsSet = ArmorSet::where("name", "Hero of Winds Set")->first()->id;
        $heroOfTwilightSet = ArmorSet::where("name", "Hero of Twilight Set")->first()->id;
        $heroOfTheSkySet = ArmorSet::where("name", "Hero of the Sky Set")->first()->id;
        $heroSet = ArmorSet::where("name", "Hero Set")->first()->id;
        $heroOfTheWildSet = ArmorSet::where("name", "Hero of the Wild Set")->first()->id;
        $tinglesSet = ArmorSet::where("name", "Tingle's Set")->first()->id;
        $phantomEquipment = ArmorSet::where("name", "Phantom Equipment")->first()->id;
        $royalGuardSet = ArmorSet::where("name", "Royal Guard Set")->first()->id;
        $phantomGanonSet = ArmorSet::where("name", "Phantom Ganon Set")->first()->id;
        $salvagersSet = ArmorSet::where("name", "Salvager's Set")->first()->id;
        $glideSet = ArmorSet::where("name", "Glide Set")->first()->id;
        $archaicSet = ArmorSet::where("name", "Archaic Set")->first()->id;
        $froggySet = ArmorSet::where("name", "Froggy Set")->first()->id;
        $minersSet = ArmorSet::where("name", "Miner's Set")->first()->id;
        $emberSet = ArmorSet::where("name", "Ember Set")->first()->id;
        $chargedSet = ArmorSet::where("name", "Charged Set")->first()->id;
        $frostbiteSet = ArmorSet::where("name", "Frostbite Set")->first()->id;
        $mysticSet = ArmorSet::where("name", "Mystic Set")->first()->id;
        $zonaiteSet = ArmorSet::where("name", "Zonaite Set")->first()->id;
        $awakeningSet = ArmorSet::where("name", "Awakening Set")->first()->id;
        $depthsSet = ArmorSet::where("name", "Depths Set")->first()->id;
        $yigaSet = ArmorSet::where("name", "Yiga Set")->first()->id;
        $evilSpiritSet = ArmorSet::where("name", "Evil Spirit Set")->first()->id;

        $armors = [
            [
                "name" => "Old Shirt",
                "image" => "$prefix/BotW_Old_Shirt_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $wellWornOutfit,
            ],
            [
                "name" => "Well-Worn Trousers",
                "image" => "$prefix/BotW_Well-Worn_Trousers_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $wellWornOutfit,
            ],
            [
                "name" => "Champion's Tunic",
                "image" => "$prefix/BotW_Champion's_Tunic_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Hylian Hood",
                "image" => "$prefix/BotW_Hylian_Hood_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $hylianSet,
            ],
            [
                "name" => "Hylian Tunic",
                "image" => "$prefix/BotW_Hylian_Tunic_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $hylianSet,
            ],
            [
                "name" => "Hylian Trousers",
                "image" => "$prefix/BotW_Hylian_Trousers_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $hylianSet,
            ],
            [
                "name" => "Soldier's Helm",
                "image" => "$prefix/BotW_Soldier's_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $soldiersSet,
            ],
            [
                "name" => "Soldier's Armor",
                "image" => "$prefix/BotW_Soldier's_Armor_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $soldiersSet,
            ],
            [
                "name" => "Soldier's Greaves",
                "image" => "$prefix/BotW_Soldier's_Greaves_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $soldiersSet,
            ],
            [
                "name" => "Amber Earrings",
                "image" => "$prefix/BotW_Amber_Earrings_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Ruby Circlet",
                "image" => "$prefix/BotW_Ruby_Circlet_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Snowquill Headdress",
                "image" => "$prefix/BotW_Snowquill_Headdress_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $snowquillSet,
            ],
            [
                "name" => "Snowquill Tunic",
                "image" => "$prefix/BotW_Snowquill_Tunic_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $snowquillSet,
            ],
            [
                "name" => "Snowquill Trousers",
                "image" => "$prefix/BotW_Snowquill_Trousers_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $snowquillSet,
            ],
            [
                "name" => "Sapphire Circlet",
                "image" => "$prefix/BotW_Sapphire_Circlet_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Desert Voe Headband",
                "image" => "$prefix/BotW_Desert_Voe_Headband_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $desertVoeSet,
            ],
            [
                "name" => "Desert Voe Spaulder",
                "image" => "$prefix/BotW_Desert_Voe_Spaulder_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $desertVoeSet,
            ],
            [
                "name" => "Desert Voe Trousers",
                "image" => "$prefix/BotW_Desert_Voe_Trousers_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $desertVoeSet,
            ],
            [
                "name" => "Gerudo Veil",
                "image" => "$prefix/BotW_Gerudo_Veil_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $gerudoSet,
            ],
            [
                "name" => "Gerudo Top",
                "image" => "$prefix/BotW_Gerudo_Top_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $gerudoSet,
            ],
            [
                "name" => "Gerudo Sirwal",
                "image" => "$prefix/BotW_Gerudo_Sirwal_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $gerudoSet,
            ],
            [
                "name" => "Topaz Earrings",
                "image" => "$prefix/BotW_Topaz_Earrings_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Rubber Helm",
                "image" => "$prefix/BotW_Rubber_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $rubberSet,
            ],
            [
                "name" => "Rubber Armor",
                "image" => "$prefix/BotW_Rubber_Armor_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $rubberSet,
            ],
            [
                "name" => "Rubber Tights",
                "image" => "$prefix/BotW_Rubber_Tights_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $rubberSet,
            ],
            [
                "name" => "Flamebreaker Helm",
                "image" => "$prefix/BotW_Flamebreaker_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $flamebreakerSet,
            ],
            [
                "name" => "Flamebreaker Armor",
                "image" => "$prefix/BotW_Flamebreaker_Armor_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $flamebreakerSet,
            ],
            [
                "name" => "Flamebreaker Boots",
                "image" => "$prefix/BotW_Flamebreaker_Boots_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $flamebreakerSet,
            ],
            [
                "name" => "Opal Earrings",
                "image" => "$prefix/BotW_Opal_Earrings_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Zora Helm",
                "image" => "$prefix/BotW_Zora_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $zoraSet,
            ],
            [
                "name" => "Zora Armor",
                "image" => "$prefix/BotW_Zora_Armor_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $zoraSet,
            ],
            [
                "name" => "Zora Greaves",
                "image" => "$prefix/BotW_Zora_Greaves_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $zoraSet,
            ],
            [
                "name" => "Stealth Mask",
                "image" => "$prefix/BotW_Stealth_Mask_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $stealthSet,
            ],
            [
                "name" => "Stealth Chest Guard",
                "image" => "$prefix/BotW_Stealth_Chest_Guard_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $stealthSet,
            ],
            [
                "name" => "Stealth Tights",
                "image" => "$prefix/BotW_Stealth_Tights_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $stealthSet,
            ],
            [
                "name" => "Sheik's Mask",
                "image" => "$prefix/BotW_Sheik's_Mask_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Thunder Helm",
                "image" => "$prefix/BotW_Thunder_Helm_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Climber's Bandanna",
                "image" => "$prefix/BotW_Climber's_Bandanna_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $climbingSet,
            ],
            [
                "name" => "Climbing Gear",
                "image" => "$prefix/BotW_Climbing_Gear_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $climbingSet,
            ],
            [
                "name" => "Climbing Boots",
                "image" => "$prefix/BotW_Climbing_Boots_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $climbingSet,
            ],
            [
                "name" => "Barbarian Helm",
                "image" => "$prefix/BotW_Barbarian_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $barbarianSet,
            ],
            [
                "name" => "Barbarian Armor",
                "image" => "$prefix/BotW_Barbarian_Armor_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $barbarianSet,
            ],
            [
                "name" => "Barbarian Leg Wraps",
                "image" => "$prefix/BotW_Barbarian_Leg_Wraps_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $barbarianSet,
            ],
            [
                "name" => "Fierce Deity Mask",
                "image" => "$prefix/BotW_Fierce_Deity_Mask_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $fierceDeitySet,
            ],
            [
                "name" => "Fierce Deity Armor",
                "image" => "$prefix/BotW_Fierce_Deity_Armor_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $fierceDeitySet,
            ],
            [
                "name" => "Fierce Deity Boots",
                "image" => "$prefix/BotW_Fierce_Deity_Boots_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $fierceDeitySet,
            ],
            [
                "name" => "Radiant Mask",
                "image" => "$prefix/BotW_Radiant_Mask_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $radiantSet,
            ],
            [
                "name" => "Radiant Shirt",
                "image" => "$prefix/BotW_Radiant_Shirt_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $radiantSet,
            ],
            [
                "name" => "Radiant Tights",
                "image" => "$prefix/BotW_Radiant_Tights_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $radiantSet,
            ],
            [
                "name" => "Diamond Circlet",
                "image" => "$prefix/BotW_Diamond_Circlet_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Sand Boots",
                "image" => "$prefix/BotW_Sand_Boots_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Snow Boots",
                "image" => "$prefix/BotW_Snow_Boots_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Bokoblin Mask",
                "image" => "$prefix/BotW_Bokoblin_Mask_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Moblin Mask",
                "image" => "$prefix/BotW_Moblin_Mask_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Lizalfos Mask",
                "image" => "$prefix/BotW_Lizalfos_Mask_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Lynel Mask",
                "image" => "$prefix/BotW_Lynel_Mask_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Dark Hood",
                "image" => "$prefix/BotW_Dark_Hood_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $darkSet,
            ],
            [
                "name" => "Dark Tunic",
                "image" => "$prefix/BotW_Dark_Tunic_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $darkSet,
            ],
            [
                "name" => "Dark Trousers",
                "image" => "$prefix/BotW_Dark_Trousers_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $darkSet,
            ],
            [
                "name" => "Cap of Time",
                "image" => "$prefix/BotW_Cap_of_Time_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTimeSet,
            ],
            [
                "name" => "Tunic of Time",
                "image" => "$prefix/BotW_Tunic_of_Time_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTimeSet,
            ],
            [
                "name" => "Trousers of Time",
                "image" => "$prefix/BotW_Trousers_of_Time_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTimeSet,
            ],
            [
                "name" => "Cap of the Wind",
                "image" => "$prefix/BotW_Cap_of_the_Wind_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfWindsSet,
            ],
            [
                "name" => "Tunic of the Wind",
                "image" => "$prefix/BotW_Tunic_of_the_Wind_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfWindsSet,
            ],
            [
                "name" => "Trousers of the Wind",
                "image" => "$prefix/BotW_Trousers_of_the_Wind_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfWindsSet,
            ],
            [
                "name" => "Cap of Twilight",
                "image" => "$prefix/BotW_Cap_of_Twilight_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTwilightSet,
            ],
            [
                "name" => "Tunic of Twilight",
                "image" => "$prefix/BotW_Tunic_of_Twilight_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTwilightSet,
            ],
            [
                "name" => "Trousers of Twilight",
                "image" => "$prefix/BotW_Trousers_of_Twilight_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTwilightSet,
            ],
            [
                "name" => "Cap of the Sky",
                "image" => "$prefix/BotW_Cap_of_the_Sky_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTheSkySet,
            ],
            [
                "name" => "Tunic of the Sky",
                "image" => "$prefix/BotW_Tunic_of_the_Sky_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTheSkySet,
            ],
            [
                "name" => "Trousers of the Sky",
                "image" => "$prefix/BotW_Trousers_of_the_Sky_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTheSkySet,
            ],
            [
                "name" => "Cap of the Hero",
                "image" => "$prefix/BotW_Cap_of_the_Hero_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroSet,
            ],
            [
                "name" => "Tunic of the Hero",
                "image" => "$prefix/BotW_Tunic_of_the_Hero_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroSet,
            ],
            [
                "name" => "Trousers of the Hero",
                "image" => "$prefix/BotW_Trousers_of_the_Hero_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroSet,
            ],
            [
                "name" => "Cap of the Wild",
                "image" => "$prefix/BotW_Cap_of_the_Wild_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTheWildSet,
            ],
            [
                "name" => "Tunic of the Wild",
                "image" => "$prefix/BotW_Tunic_of_the_Wild_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTheWildSet,
            ],
            [
                "name" => "Trousers of the Wild",
                "image" => "$prefix/BotW_Trousers_of_the_Wild_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $heroOfTheWildSet,
            ],
            [
                "name" => "Nintendo Switch Shirt",
                "image" => "$prefix/BotW_Nintendo_Switch_Shirt_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Korok Mask",
                "image" => "$prefix/BotW_Korok_Mask_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Majora's Mask",
                "image" => "$prefix/BotW_Majora's_Mask_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Tingle's Hood",
                "image" => "$prefix/BotW_Tingle's_Hood_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $tinglesSet,
            ],
            [
                "name" => "Tingle's Shirt",
                "image" => "$prefix/BotW_Tingle's_Shirt_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $tinglesSet,
            ],
            [
                "name" => "Tingle's Tights",
                "image" => "$prefix/BotW_Tingle's_Tights_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $tinglesSet,
            ],
            [
                "name" => "Midna's Helmet",
                "image" => "$prefix/BotW_Midna's_Helmet_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Phantom Helmet",
                "image" => "$prefix/BotW_Phantom_Helmet_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $phantomEquipment,
            ],
            [
                "name" => "Phantom Armor",
                "image" => "$prefix/BotW_Phantom_Armor_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $phantomEquipment,
            ],
            [
                "name" => "Phantom Greaves",
                "image" => "$prefix/BotW_Phantom_Greaves_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $phantomEquipment,
            ],
            [
                "name" => "Island Lobster Shirt",
                "image" => "$prefix/BotW_Island_Lobster_Shirt_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Ravio's Hood",
                "image" => "$prefix/BotW_Ravio's_Hood_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Zant's Helmet",
                "image" => "$prefix/BotW_Zant's_Helmet_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Royal Guard Cap",
                "image" => "$prefix/BotW_Royal_Guard_Cap_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $royalGuardSet,
            ],
            [
                "name" => "Royal Guard Uniform",
                "image" => "$prefix/BotW_Royal_Guard_Uniform_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $royalGuardSet,
            ],
            [
                "name" => "Royal Guard Boots",
                "image" => "$prefix/BotW_Royal_Guard_Boots_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $royalGuardSet,
            ],
            [
                "name" => "Phantom Ganon Skull",
                "image" => "$prefix/BotW_Phantom_Ganon_Skull_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $phantomGanonSet,
            ],
            [
                "name" => "Phantom Ganon Armor",
                "image" => "$prefix/BotW_Phantom_Ganon_Armor_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $phantomGanonSet,
            ],
            [
                "name" => "Phantom Ganon Greaves",
                "image" => "$prefix/BotW_Phantom_Ganon_Greaves_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $phantomGanonSet,
            ],
            [
                "name" => "Vah Ruta Divine Helm",
                "image" => "$prefix/BotW_Vah_Ruta_Divine_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Vah Medoh Divine Helm",
                "image" => "$prefix/BotW_Vah_Medoh_Divine_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Vah Rudania Divine Helm",
                "image" => "$prefix/BotW_Vah_Rudania_Divine_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Vah Naboris Divine Helm",
                "image" => "$prefix/BotW_Vah_Naboris_Divine_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Salvager Headwear",
                "image" => "$prefix/BotW_Salvager_Headwear_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $salvagersSet,
            ],
            [
                "name" => "Salvager Vest",
                "image" => "$prefix/BotW_Salvager_Vest_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $salvagersSet,
            ],
            [
                "name" => "Salvager Trousers",
                "image" => "$prefix/BotW_Salvager_Trousers_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $salvagersSet,
            ],
            [
                "name" => "Glide Mask",
                "image" => "$prefix/TotK_Glide_Mask_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $glideSet,
            ],
            [
                "name" => "Glide Shirt",
                "image" => "$prefix/TotK_Glide_Shirt_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $glideSet,
            ],
            [
                "name" => "Glide Tights",
                "image" => "$prefix/TotK_Glide_Tights_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $glideSet,
            ],
            [
                "name" => "Ancient Hero's Aspect",
                "image" => "$prefix/TotK_Ancient_Hero's_Aspect_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Archaic Tunic",
                "image" => "$prefix/TotK_Archaic_Tunic_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $archaicSet,
            ],
            [
                "name" => "Archaic Legwear",
                "image" => "$prefix/TotK_Archaic_Legwear_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $archaicSet,
            ],
            [
                "name" => "Archaic Warm Greaves",
                "image" => "$prefix/TotK_Archaic_Warm_Greaves_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $archaicSet,
            ],
            [
                "name" => "Froggy Hood",
                "image" => "$prefix/TotK_Froggy_Hood_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $froggySet,
            ],
            [
                "name" => "Froggy Sleeve",
                "image" => "$prefix/TotK_Froggy_Sleeve_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $froggySet,
            ],
            [
                "name" => "Froggy Leggings",
                "image" => "$prefix/TotK_Froggy_Leggings_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $froggySet,
            ],
            [
                "name" => "Miner's Mask",
                "image" => "$prefix/TotK_Miner's_Mask_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $minersSet,
            ],
            [
                "name" => "Miner's Top",
                "image" => "$prefix/TotK_Miner's_Top_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $minersSet,
            ],
            [
                "name" => "Miner's Trousers",
                "image" => "$prefix/TotK_Miner's_Trousers_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $minersSet,
            ],
            [
                "name" => "Ember Headdress",
                "image" => "$prefix/TotK_Ember_Headdress_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $emberSet,
            ],
            [
                "name" => "Ember Shirt",
                "image" => "$prefix/TotK_Ember_Shirt_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $emberSet,
            ],
            [
                "name" => "Ember Trousers",
                "image" => "$prefix/TotK_Ember_Trousers_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $emberSet,
            ],
            [
                "name" => "Charged Headdress",
                "image" => "$prefix/TotK_Charged_Headdress_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $chargedSet,
            ],
            [
                "name" => "Charged Shirt",
                "image" => "$prefix/TotK_Charged_Shirt_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $chargedSet,
            ],
            [
                "name" => "Charged Trousers",
                "image" => "$prefix/TotK_Charged_Trousers_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $chargedSet,
            ],
            [
                "name" => "Frostbite Headdress",
                "image" => "$prefix/TotK_Frostbite_Headdress_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $frostbiteSet,
            ],
            [
                "name" => "Frostbite Shirt",
                "image" => "$prefix/TotK_Frostbite_Shirt_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $frostbiteSet,
            ],
            [
                "name" => "Frostbite Trousers",
                "image" => "$prefix/TotK_Frostbite_Trousers_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $frostbiteSet,
            ],
            [
                "name" => "Cece Hat",
                "image" => "$prefix/TotK_Cece_Hat_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Mystic Headpiece",
                "image" => "$prefix/TotK_Mystic_Headpiece_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $mysticSet,
            ],
            [
                "name" => "Mystic Robe",
                "image" => "$prefix/TotK_Mystic_Robe_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $mysticSet,
            ],
            [
                "name" => "Mystic Trousers",
                "image" => "$prefix/TotK_Mystic_Trousers_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $mysticSet,
            ],
            [
                "name" => "Zonaite Helm",
                "image" => "$prefix/TotK_Zonaite_Helm_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $zonaiteSet,
            ],
            [
                "name" => "Zonaite Waistguard",
                "image" => "$prefix/TotK_Zonaite_Waistguard_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $zonaiteSet,
            ],
            [
                "name" => "Zonaite Shin Guards",
                "image" => "$prefix/TotK_Zonaite_Shin_Guards_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $zonaiteSet,
            ],
            [
                "name" => "Mask of Awakening",
                "image" => "$prefix/TotK_Mask_of_Awakening_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $awakeningSet,
            ],
            [
                "name" => "Tunic of Awakening",
                "image" => "$prefix/TotK_Tunic_of_Awakening_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $awakeningSet,
            ],
            [
                "name" => "Trousers of Awakening",
                "image" => "$prefix/TotK_Trousers_of_Awakening_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $awakeningSet,
            ],
            [
                "name" => "Horriblin Mask",
                "image" => "$prefix/TotK_Horriblin_Mask_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Hood of the Depths",
                "image" => "$prefix/TotK_Hood_of_the_Depths_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $depthsSet,
            ],
            [
                "name" => "Tunic of the Depths",
                "image" => "$prefix/TotK_Tunic_of_the_Depths_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $depthsSet,
            ],
            [
                "name" => "Gaiters of the Depths",
                "image" => "$prefix/TotK_Gaiters_of_the_Depths_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $depthsSet,
            ],
            [
                "name" => "Well-Worn Hair Band",
                "image" => "$prefix/TotK_Well-Worn_Hair_Band_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Lightning Helm",
                "image" => "$prefix/TotK_Lightning_Helm_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => null,
            ],
            [
                "name" => "Tunic of Memories",
                "image" => "$prefix/TotK_Tunic_of_Memories_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => null,
            ],
            [
                "name" => "Yiga Mask",
                "image" => "$prefix/TotK_Yiga_Mask_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $yigaSet,
            ],
            [
                "name" => "Yiga Armor",
                "image" => "$prefix/TotK_Yiga_Armor_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $yigaSet,
            ],
            [
                "name" => "Yiga Tights",
                "image" => "$prefix/TotK_Yiga_Tights_Icon.png",
                "upgradable" => 1,
                "armor_set_id" => $yigaSet,
            ],
            [
                "name" => "Evil Spirit Mask",
                "image" => "$prefix/TotK_Evil_Spirit_Mask_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $evilSpiritSet,
            ],
            [
                "name" => "Evil Spirit Armor",
                "image" => "$prefix/TotK_Evil_Spirit_Armor_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $evilSpiritSet,
            ],
            [
                "name" => "Evil Spirit Greaves",
                "image" => "$prefix/TotK_Evil_Spirit_Greaves_Icon.png",
                "upgradable" => 0,
                "armor_set_id" => $evilSpiritSet,
            ],
        ];

        Armor::upsert($armors, ['name'], ['image', 'upgradable', 'armor_set_id']);
    }
}
