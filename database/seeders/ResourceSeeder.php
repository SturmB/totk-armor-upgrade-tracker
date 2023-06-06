<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the Resources table.
     */
    public function run(): void
    {
        $prefix = "resources";

        $resources = [
            [
                "name" => "Voltfruit",
                "image" => "$prefix/BotW_Voltfruit_Icon.png",
            ],
            [
                "name" => "Mighty Bananas",
                "image" => "$prefix/BotW_Mighty_Bananas_Icon.png",
            ],
            [
                "name" => "Fire Fruit",
                "image" => "$prefix/TotK_Fire_Fruit_Icon.png",
            ],
            [
                "name" => "Ice Fruit",
                "image" => "$prefix/TotK_Ice_Fruit_Icon.png",
            ],
            [
                "name" => "Shock Fruit",
                "image" => "$prefix/TotK_Shock_Fruit_Icon.png",
            ],
            [
                "name" => "Dazzlefruit",
                "image" => "$prefix/TotK_Dazzlefruit_Icon.png",
            ],
            [
                "name" => "Puffshroom",
                "image" => "$prefix/TotK_Puffshroom_Icon.png",
            ],
            [
                "name" => "Rushroom",
                "image" => "$prefix/BotW_Rushroom_Icon.png",
            ],
            [
                "name" => "Brightcap",
                "image" => "$prefix/TotK_Brightcap_Icon.png",
            ],
            [
                "name" => "Chillshroom",
                "image" => "$prefix/BotW_Chillshroom_Icon.png",
            ],
            [
                "name" => "Sunshroom",
                "image" => "$prefix/BotW_Sunshroom_Icon.png",
            ],
            [
                "name" => "Zapshroom",
                "image" => "$prefix/BotW_Zapshroom_Icon.png",
            ],
            [
                "name" => "Silent Shroom",
                "image" => "$prefix/BotW_Silent_Shroom_Icon.png",
            ],
            [
                "name" => "Razorshroom",
                "image" => "$prefix/BotW_Razorshroom_Icon.png",
            ],
            [
                "name" => "Swift Carrot",
                "image" => "$prefix/BotW_Swift_Carrot_Icon.png",
            ],
            [
                "name" => "Silent Princess",
                "image" => "$prefix/BotW_Silent_Princess_Icon.png",
            ],
            [
                "name" => "Cool Safflina",
                "image" => "$prefix/BotW_Cool_Safflina_Icon.png",
            ],
            [
                "name" => "Warm Safflina",
                "image" => "$prefix/BotW_Warm_Safflina_Icon.png",
            ],
            [
                "name" => "Electric Safflina",
                "image" => "$prefix/BotW_Electric_Safflina_Icon.png",
            ],
            [
                "name" => "Mighty Thistle",
                "image" => "$prefix/BotW_Mighty_Thistle_Icon.png",
            ],
            [
                "name" => "Swift Violet",
                "image" => "$prefix/BotW_Swift_Violet_Icon.png",
            ],
            [
                "name" => "Blue Nightshade",
                "image" => "$prefix/BotW_Blue_Nightshade_Icon.png",
            ],
            [
                "name" => "Sundelion",
                "image" => "$prefix/TotK_Sundelion_Icon.png",
            ],
            [
                "name" => "Courser Bee Honey",
                "image" => "$prefix/BotW_Courser_Bee_Honey_Icon.png",
            ],
            [
                "name" => "Acorn",
                "image" => "$prefix/BotW_Acorn_Icon.png",
            ],
            [
                "name" => "Dark Clump",
                "image" => "$prefix/TotK_Dark_Clump_Icon.png",
            ],
            [
                "name" => "Star Fragment",
                "image" => "$prefix/BotW_Star_Fragment_Icon.png",
            ],
            [
                "name" => "Hearty Bass",
                "image" => "$prefix/BotW_Hearty_Bass_Icon.png",
            ],
            [
                "name" => "Hyrule Bass",
                "image" => "$prefix/BotW_Hyrule_Bass_Icon.png",
            ],
            [
                "name" => "Stealthfin Trout",
                "image" => "$prefix/BotW_Stealthfin_Trout_Icon.png",
            ],
            [
                "name" => "Chillfin Trout",
                "image" => "$prefix/BotW_Chillfin_Trout_Icon.png",
            ],
            [
                "name" => "Sizzlefin Trout",
                "image" => "$prefix/BotW_Sizzlefin_Trout_Icon.png",
            ],
            [
                "name" => "Voltfin Trout",
                "image" => "$prefix/BotW_Voltfin_Trout_Icon.png",
            ],
            [
                "name" => "Glowing Cave Fish",
                "image" => "$prefix/TotK_Glowing_Cave_Fish_Icon.png",
            ],
            [
                "name" => "Razorclaw Crab",
                "image" => "$prefix/BotW_Razorclaw_Crab_Icon.png",
            ],
            [
                "name" => "Sneaky River Snail",
                "image" => "$prefix/BotW_Sneaky_River_Snail_Icon.png",
            ],
            [
                "name" => "Winterwing Butterfly",
                "image" => "$prefix/BotW_Winterwing_Butterfly_Icon.png",
            ],
            [
                "name" => "Summerwing Butterfly",
                "image" => "$prefix/BotW_Summerwing_Butterfly_Icon.png",
            ],
            [
                "name" => "Thunderwing Butterfly",
                "image" => "$prefix/BotW_Thunderwing_Butterfly_Icon.png",
            ],
            [
                "name" => "Smotherwing Butterfly",
                "image" => "$prefix/BotW_Smotherwing_Butterfly_Icon.png",
            ],
            [
                "name" => "Cold Darner",
                "image" => "$prefix/BotW_Cold_Darner_Icon.png",
            ],
            [
                "name" => "Warm Darner",
                "image" => "$prefix/BotW_Warm_Darner_Icon.png",
            ],
            [
                "name" => "Electric Darner",
                "image" => "$prefix/BotW_Electric_Darner_Icon.png",
            ],
            [
                "name" => "Bladed Rhino Beetle",
                "image" => "$prefix/BotW_Bladed_Rhino_Beetle_Icon.png",
            ],
            [
                "name" => "Energetic Rhino Beetle",
                "image" => "$prefix/BotW_Energetic_Rhino_Beetle_Icon.png",
            ],
            [
                "name" => "Sunset Firefly",
                "image" => "$prefix/BotW_Sunset_Firefly_Icon.png",
            ],
            [
                "name" => "Deep Firefly",
                "image" => "$prefix/TotK_Deep_Firefly_Icon.png",
            ],
            [
                "name" => "Hot-Footed Frog",
                "image" => "$prefix/BotW_Hot-Footed_Frog_Icon.png",
            ],
            [
                "name" => "Sticky Frog",
                "image" => "$prefix/TotK_Sticky_Frog_Icon.png",
            ],
            [
                "name" => "Hightail Lizard",
                "image" => "$prefix/BotW_Hightail_Lizard_Icon.png",
            ],
            [
                "name" => "Hearty Lizard",
                "image" => "$prefix/BotW_Hearty_Lizard_Icon.png",
            ],
            [
                "name" => "Fireproof Lizard",
                "image" => "$prefix/BotW_Fireproof_Lizard_Icon.png",
            ],
            [
                "name" => "Sticky Lizard",
                "image" => "$prefix/TotK_Sticky_Lizard_Icon.png",
            ],
            [
                "name" => "Diamond",
                "image" => "$prefix/TotK_Diamond_Icon.png",
            ],
            [
                "name" => "Ruby",
                "image" => "$prefix/BotW_Ruby_Icon.png",
            ],
            [
                "name" => "Sapphire",
                "image" => "$prefix/BotW_Sapphire_Icon.png",
            ],
            [
                "name" => "Topaz",
                "image" => "$prefix/BotW_Topaz_Icon.png",
            ],
            [
                "name" => "Opal",
                "image" => "$prefix/BotW_Opal_Icon.png",
            ],
            [
                "name" => "Amber",
                "image" => "$prefix/TotK_Amber_Icon.png",
            ],
            [
                "name" => "Luminous Stone",
                "image" => "$prefix/BotW_Luminous_Stone_Icon.png",
            ],
            [
                "name" => "Flint",
                "image" => "$prefix/BotW_Flint_Icon.png",
            ],
            [
                "name" => "Bokoblin Guts",
                "image" => "$prefix/BotW_Bokoblin_Guts_Icon.png",
            ],
            [
                "name" => "Moblin Guts",
                "image" => "$prefix/BotW_Moblin_Guts_Icon.png",
            ],
            [
                "name" => "Horriblin Guts",
                "image" => "$prefix/TotK_Horriblin_Guts_Icon.png",
            ],
            [
                "name" => "Hinox Guts",
                "image" => "$prefix/BotW_Hinox_Guts_Icon.png",
            ],
            [
                "name" => "Lynel Guts",
                "image" => "$prefix/BotW_Lynel_Guts_Icon.png",
            ],
            [
                "name" => "Molduga Guts",
                "image" => "$prefix/BotW_Molduga_Guts_Icon.png",
            ],
            [
                "name" => "Gibdo Guts",
                "image" => "$prefix/TotK_Gibdo_Guts_Icon.png",
            ],
            [
                "name" => "Frox Guts",
                "image" => "$prefix/TotK_Frox_Guts_Icon.png",
            ],
            [
                "name" => "Gleeok Guts",
                "image" => "$prefix/TotK_Gleeok_Guts_Icon.png",
            ],
            [
                "name" => "Red Chuchu Jelly",
                "image" => "$prefix/BotW_Red_Chuchu_Jelly_Icon.png",
            ],
            [
                "name" => "White Chuchu Jelly",
                "image" => "$prefix/BotW_White_Chuchu_Jelly_Icon.png",
            ],
            [
                "name" => "Yellow Chuchu Jelly",
                "image" => "$prefix/BotW_Yellow_Chuchu_Jelly_Icon.png",
            ],
            [
                "name" => "Chuchu Jelly",
                "image" => "$prefix/BotW_Chuchu_Jelly_Icon.png",
            ],
            [
                "name" => "Keese Eyeball",
                "image" => "$prefix/BotW_Keese_Eyeball_Icon.png",
            ],
            [
                "name" => "Octorok Eyeball",
                "image" => "$prefix/BotW_Octorok_Eyeball_Icon.png",
            ],
            [
                "name" => "Aerocuda Eyeball",
                "image" => "$prefix/TotK_Aerocuda_Eyeball_Icon.png",
            ],
            [
                "name" => "Keese Wing",
                "image" => "$prefix/BotW_Keese_Wing_Icon.png",
            ],
            [
                "name" => "Fire Keese Wing",
                "image" => "$prefix/BotW_Fire_Keese_Wing_Icon.png",
            ],
            [
                "name" => "Ice Keese Wing",
                "image" => "$prefix/BotW_Ice_Keese_Wing_Icon.png",
            ],
            [
                "name" => "Electric Keese Wing",
                "image" => "$prefix/BotW_Electric_Keese_Wing_Icon.png",
            ],
            [
                "name" => "Aerocuda Wing",
                "image" => "$prefix/TotK_Aerocuda_Wing_Icon.png",
            ],
            [
                "name" => "Gibdo Wing",
                "image" => "$prefix/TotK_Gibdo_Wing_Icon.png",
            ],
            [
                "name" => "Gleeok Wing",
                "image" => "$prefix/TotK_Gleeok_Wing_Icon.png",
            ],
            [
                "name" => "Bokoblin Horn",
                "image" => "$prefix/TotK_Bokoblin_Horn_Icon.png",
            ],
            [
                "name" => "Blue Bokoblin Horn",
                "image" => "$prefix/TotK_Blue_Bokoblin_Horn_Icon.png",
            ],
            [
                "name" => "Black Bokoblin Horn",
                "image" => "$prefix/TotK_Black_Bokoblin_Horn_Icon.png",
            ],
            [
                "name" => "Silver Bokoblin Horn",
                "image" => "$prefix/TotK_Silver_Bokoblin_Horn_Icon.png",
            ],
            [
                "name" => "Boss Bokoblin Horn",
                "image" => "$prefix/TotK_Boss_Bokoblin_Horn_Icon.png",
            ],
            [
                "name" => "Blue Boss Bokoblin Horn",
                "image" => "$prefix/TotK_Blue_Boss_Bokoblin_Horn_Icon.png",
            ],
            [
                "name" => "Black Boss Bokoblin Horn",
                "image" => "$prefix/TotK_Black_Boss_Bokoblin_Horn_Icon.png",
            ],
            [
                "name" => "Silver Boss Bokoblin Horn",
                "image" => "$prefix/TotK_Silver_Boss_Bokoblin_Horn_Icon.png",
            ],
            [
                "name" => "Lizalfos Horn",
                "image" => "$prefix/TotK_Lizalfos_Horn_Icon.png",
            ],
            [
                "name" => "Blue Lizalfos Horn",
                "image" => "$prefix/TotK_Blue_Lizalfos_Horn_Icon.png",
            ],
            [
                "name" => "Black Lizalfos Horn",
                "image" => "$prefix/TotK_Black_Lizalfos_Horn_Icon.png",
            ],
            [
                "name" => "Fire-Breath Lizalfos Horn",
                "image" => "$prefix/TotK_Fire-Breath_Lizalfos_Horn_Icon.png",
            ],
            [
                "name" => "Ice-Breath Lizalfos Horn",
                "image" => "$prefix/TotK_Ice-Breath_Lizalfos_Horn_Icon.png",
            ],
            [
                "name" => "Electric Lizalfos Horn",
                "image" => "$prefix/TotK_Electric_Lizalfos_Horn_Icon.png",
            ],
            [
                "name" => "Soldier Construct Horn",
                "image" => "$prefix/TotK_Soldier_Construct_Horn_Icon.png",
            ],
            [
                "name" => "Soldier Construct II Horn",
                "image" => "$prefix/TotK_Soldier_Construct_II_Horn_Icon.png",
            ],
            [
                "name" => "Soldier Construct III Horn",
                "image" => "$prefix/TotK_Soldier_Construct_III_Horn_Icon.png",
            ],
            [
                "name" => "Soldier Construct IV Horn",
                "image" => "$prefix/TotK_Soldier_Construct_IV_Horn_Icon.png",
            ],
            [
                "name" => "Captain Construct I Horn",
                "image" => "$prefix/TotK_Captain_Construct_I_Horn_Icon.png",
            ],
            [
                "name" => "Captain Construct II Horn",
                "image" => "$prefix/TotK_Captain_Construct_II_Horn_Icon.png",
            ],
            [
                "name" => "Captain Construct III Horn",
                "image" => "$prefix/TotK_Captain_Construct_III_Horn_Icon.png",
            ],
            [
                "name" => "Hinox Toenail",
                "image" => "$prefix/BotW_Hinox_Toenail_Icon.png",
            ],
            [
                "name" => "Frox Fingernail",
                "image" => "$prefix/TotK_Frox_Fingernail_Icon.png",
            ],
            [
                "name" => "Fire Like Stone",
                "image" => "$prefix/TotK_Fire_Like_Stone_Icon.png",
            ],
            [
                "name" => "Ice Like Stone",
                "image" => "$prefix/TotK_Ice_Like_Stone_Icon.png",
            ],
            [
                "name" => "Shock Like Stone",
                "image" => "$prefix/TotK_Shock_Like_Stone_Icon.png",
            ],
            [
                "name" => "Moblin Horn",
                "image" => "$prefix/TotK_Moblin_Horn_Icon.png",
            ],
            [
                "name" => "Blue Moblin Horn",
                "image" => "$prefix/TotK_Blue_Moblin_Horn_Icon.png",
            ],
            [
                "name" => "Horriblin Horn",
                "image" => "$prefix/TotK_Horriblin_Horn_Icon.png",
            ],
            [
                "name" => "Blue Horriblin Horn",
                "image" => "$prefix/TotK_Blue_Horriblin_Horn_Icon.png",
            ],
            [
                "name" => "Black Horriblin Horn",
                "image" => "$prefix/TotK_Black_Horriblin_Horn_Icon.png",
            ],
            [
                "name" => "Black Hinox Horn",
                "image" => "$prefix/TotK_Black_Hinox_Horn_Icon.png",
            ],
            [
                "name" => "Lynel Saber Horn",
                "image" => "$prefix/TotK_Lynel_Saber_Horn_Icon.png",
            ],
            [
                "name" => "Lynel Mace Horn",
                "image" => "$prefix/TotK_Lynel_Mace_Horn_Icon.png",
            ],
            [
                "name" => "Blue-Maned Lynel Saber Horn",
                "image" => "$prefix/TotK_Blue-Maned_Lynel_Saber_Horn_Icon.png",
            ],
            [
                "name" => "Blue-Maned Lynel Mace Horn",
                "image" => "$prefix/TotK_Blue-Maned_Lynel_Mace_Horn_Icon.png",
            ],
            [
                "name" => "White-Maned Lynel Saber Horn",
                "image" => "$prefix/TotK_White-Maned_Lynel_Saber_Horn_Icon.png",
            ],
            [
                "name" => "White-Maned Lynel Mace Horn",
                "image" => "$prefix/TotK_White-Maned_Lynel_Mace_Horn_Icon.png",
            ],
            [
                "name" => "Gleeok Flame Horn",
                "image" => "$prefix/TotK_Gleeok_Flame_Horn_Icon.png",
            ],
            [
                "name" => "Gleeok Frost Horn",
                "image" => "$prefix/TotK_Gleeok_Frost_Horn_Icon.png",
            ],
            [
                "name" => "Gleeok Thunder Horn",
                "image" => "$prefix/TotK_Gleeok_Thunder_Horn_Icon.png",
            ],
            [
                "name" => "Lizalfos Tail",
                "image" => "$prefix/BotW_Lizalfos_Tail_Icon.png",
            ],
            [
                "name" => "Blue Lizalfos Tail",
                "image" => "$prefix/TotK_Blue_Lizalfos_Tail_Icon.png",
            ],
            [
                "name" => "Fire-Breath Lizalfos Tail",
                "image" => "$prefix/TotK_Fire-Breath_Lizalfos_Tail_Icon.png",
            ],
            [
                "name" => "Ice-Breath Lizalfos Tail",
                "image" => "$prefix/TotK_Ice-Breath_Lizalfos_Tail_Icon.png",
            ],
            [
                "name" => "Electric Lizalfos Tail",
                "image" => "$prefix/TotK_Electric_Lizalfos_Tail_Icon.png",
            ],
            [
                "name" => "Bokoblin Fang",
                "image" => "$prefix/TotK_Bokoblin_Fang_Icon.png",
            ],
            [
                "name" => "Moblin Fang",
                "image" => "$prefix/BotW_Moblin_Fang_Icon.png",
            ],
            [
                "name" => "Boss Bokoblin Fang",
                "image" => "$prefix/TotK_Boss_Bokoblin_Fang_Icon.png",
            ],
            [
                "name" => "Frox Fang",
                "image" => "$prefix/TotK_Frox_Fang_Icon.png",
            ],
            [
                "name" => "Obsidian Frox Fang",
                "image" => "$prefix/TotK_Obsidian_Frox_Fang_Icon.png",
            ],
            [
                "name" => "Blue-White Frox Fang",
                "image" => "$prefix/TotK_Blue-White_Frox_Fang_Icon.png",
            ],
            [
                "name" => "Hinox Tooth",
                "image" => "$prefix/BotW_Hinox_Tooth_Icon.png",
            ],
            [
                "name" => "Lizalfos Talon",
                "image" => "$prefix/BotW_Lizalfos_Talon_Icon.png",
            ],
            [
                "name" => "Lynel Hoof",
                "image" => "$prefix/BotW_Lynel_Hoof_Icon.png",
            ],
            [
                "name" => "Octorok Tentacle",
                "image" => "$prefix/BotW_Octorok_Tentacle_Icon.png",
            ],
            [
                "name" => "Octo Balloon",
                "image" => "$prefix/BotW_Octo_Balloon_Icon.png",
            ],
            [
                "name" => "Molduga Fin",
                "image" => "$prefix/BotW_Molduga_Fin_Icon.png",
            ],
            [
                "name" => "Gibdo Bone",
                "image" => "$prefix/TotK_Gibdo_Bone_Icon.png",
            ],
            [
                "name" => "Molduga Jaw",
                "image" => "$prefix/TotK_Molduga_Jaw_Icon.png",
            ],
            [
                "name" => "Dinraal's Scale",
                "image" => "$prefix/BotW_Dinraal's_Scale_Icon.png",
            ],
            [
                "name" => "Dinraal's Claw",
                "image" => "$prefix/BotW_Dinraal's_Claw_Icon.png",
            ],
            [
                "name" => "Shard of Dinraal's Fang",
                "image" => "$prefix/BotW_Shard_of_Dinraal's_Fang_Icon.png",
            ],
            [
                "name" => "Dinraal's Horn",
                "image" => "$prefix/TotK_Dinraal's_Horn_Icon.png",
            ],
            [
                "name" => "Naydra's Scale",
                "image" => "$prefix/BotW_Naydra's_Scale_Icon.png",
            ],
            [
                "name" => "Naydra's Claw",
                "image" => "$prefix/BotW_Naydra's_Claw_Icon.png",
            ],
            [
                "name" => "Shard of Naydra's Fang",
                "image" => "$prefix/BotW_Shard_of_Naydra's_Fang_Icon.png",
            ],
            [
                "name" => "Naydra's Horn",
                "image" => "$prefix/TotK_Naydra's_Horn_Icon.png",
            ],
            [
                "name" => "Farosh's Scale",
                "image" => "$prefix/BotW_Farosh's_Scale_Icon.png",
            ],
            [
                "name" => "Farosh's Claw",
                "image" => "$prefix/BotW_Farosh's_Claw_Icon.png",
            ],
            [
                "name" => "Shard of Farosh's Fang",
                "image" => "$prefix/BotW_Shard_of_Farosh's_Fang_Icon.png",
            ],
            [
                "name" => "Farosh's Horn",
                "image" => "$prefix/TotK_Farosh's_Horn_Icon.png",
            ],
            [
                "name" => "Shard of Farosh's Spike",
                "image" => "$prefix/TotK_Shard_of_Farosh's_Spike_Icon.png",
            ],
            [
                "name" => "Light Dragon's Scale",
                "image" => "$prefix/TotK_Light_Dragon's_Scale_Icon.png",
            ],
            [
                "name" => "Light Dragon's Talon",
                "image" => "$prefix/TotK_Light_Dragon's_Talon_Icon.png",
            ],
            [
                "name" => "Shard of Light Dragon's Fang",
                "image" => "$prefix/TotK_Shard_of_Light_Dragon's_Fang_Icon.png",
            ],
            [
                "name" => "Light Dragon's Horn",
                "image" => "$prefix/TotK_Light_Dragon's_Horn_Icon.png",
            ],
            [
                "name" => "Brightbloom Seed",
                "image" => "$prefix/TotK_Brightbloom_Seed_Icon.png",
            ],
            [
                "name" => "Giant Brightbloom Seed",
                "image" => "$prefix/TotK_Giant_Brightbloom_Seed_Icon.png",
            ],
            [
                "name" => "Zonaite",
                "image" => "$prefix/TotK_Zonaite_Icon.png",
            ],
            [
                "name" => "Large Zonaite",
                "image" => "$prefix/TotK_Large_Zonaite_Icon.png",
            ],
            [
                "name" => "Large Zonai Charge",
                "image" => "$prefix/TotK_Large_Zonai_Charge_Icon.png",
            ],
        ];

        Resource::upsert($resources, ['name'], ['image']);
    }
}
