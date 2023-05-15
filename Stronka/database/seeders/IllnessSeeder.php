<?php

namespace Database\Seeders;

use App\Models\Illness;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class IllnessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Schema::withoutForeignKeyConstraints(function () {
            Illness::truncate();
        });*/

        Illness::insert(
            [
                [
                    'name' => 'Albuterol Sulfate',
                    'description' => 'Repair Appendix, Percutaneous Approach'
                ],
                [
                    'name' => 'OCTINOXATE and TITANIUM DIOXIDE',
                    'description' => 'Removal of Other Device from Pelvic Cavity, Percutaneous Endoscopic Approach'
                ],
                [
                    'name' => 'COLESTIPOL HYDROCHLORIDE',
                    'description' => 'Replacement of Abdomen Subcutaneous Tissue and Fascia with Synthetic Substitute, Percutaneous Approach'
                ],
                [
                    'name' => 'Magnesium citrate',
                    'description' => 'Repair Left Sacroiliac Joint, External Approach'
                ],
                [
                    'name' => 'Cetirizine hydrochloride',
                    'description' => 'Revision of Nonautologous Tissue Substitute in Upper Artery, External Approach'
                ],
                [
                    'name' => 'acetaminophen',
                    'description' => 'Insertion of Spacer into Right Tarsal Joint, Open Approach'
                ],
                [
                    'name' => 'Loratadine',
                    'description' => 'Drainage of Sacral Sympathetic Nerve, Percutaneous Approach, Diagnostic'
                ],
                [
                    'name' => 'Sulfamethoxazole and Trimethoprim',
                    'description' => 'Restriction of Left Vertebral Artery with Intraluminal Device, Percutaneous Endoscopic Approach'
                ],
                [
                    'name' => 'NABUMETONE',
                    'description' => 'Bypass Transverse Colon to Transverse Colon with Nonautologous Tissue Substitute, Percutaneous Endoscopic Approach'
                ],
                [
                    'name' => 'Zolmitriptan',
                    'description' => 'Drainage of Left Vocal Cord, Percutaneous Approach'
                ],
                [
                    'name' => 'eucalyptol, menthol, methyl salicylate, thymol',
                    'description' => 'Inspection of Toe Nail, External Approach'
                ],
                [
                    'name' => 'amifostine',
                    'description' => 'Introduction of Anti-inflammatory into Peripheral Vein, Percutaneous Approach'
                ],
                [
                    'name' => 'P-AMINOPHENOL',
                    'description' => 'Revision of Extraluminal Device in Pancreatic Duct, Via Natural or Artificial Opening'
                ],
                [
                    'name' => 'Amlodipine Besylate and Benazepril Hydrochloride',
                    'description' => 'Introduction of Local Anesthetic into Lower GI, Via Natural or Artificial Opening Endoscopic'
                ],
                [
                    'name' => 'HYDROXYZINE PAMOATE',
                    'description' => 'Ultrasonography of Right Heart, Transesophageal'
                ],
                [
                    'name' => 'FENTANYL',
                    'description' => 'Reposition Left Metatarsal-Tarsal Joint with Internal Fixation Device, External Approach'
                ],
                [
                    'name' => 'metolazone',
                    'description' => 'Release Face Subcutaneous Tissue and Fascia, Open Approach'
                ],
                [
                    'name' => 'MEPERIDINE HYDROCHLORIDE',
                    'description' => 'High Dose Rate (HDR) Brachytherapy of Sinuses using Iodine 125 (I-125)'
                ],
                [
                    'name' => 'etodolac',
                    'description' => 'Revision of Synthetic Substitute in Thoracic Vertebral Joint, Percutaneous Endoscopic Approach'
                ],
                [
                    'name' => 'Sodium Fluoride',
                    'description' => 'Drainage of Left Upper Extremity Bursa and Ligament, Percutaneous Endoscopic Approach, Diagnostic'
                ],
                [
                    'name' => 'Undecylenic Acid',
                    'description' => 'Insertion of Internal Fixation Device into Lumbar Vertebral Joint, Open Approach'
                ],
                [
                    'name' => 'Bisacodyl',
                    'description' => 'Occlusion of Superior Mesenteric Artery, Percutaneous Approach'
                ],
                [
                    'name' => 'Dextromethorphan HBr, Guaifenesin',
                    'description' => 'Supplement Left Common Iliac Artery with Autologous Tissue Substitute, Percutaneous Approach'
                ],
                [
                    'name' => 'Egg Plant',
                    'description' => 'Fluoroscopy of Right Common Carotid Artery using Low Osmolar Contrast'
                ],
                [
                    'name' => 'Pancreas Argentum',
                    'description' => 'Occlusion of Thoracic Duct with Intraluminal Device, Percutaneous Approach'
                ],
                [
                    'name' => 'potassium chloride',
                    'description' => 'Removal of Infusion Device from Lower Extremity Subcutaneous Tissue and Fascia, Percutaneous Approach'
                ],
                [
                    'name' => 'Raspberry',
                    'description' => 'Release Left Upper Leg Skin, External Approach'
                ],
                [
                    'name' => 'DOXEPIN HYDROCHLORIDE',
                    'description' => 'Transfer Olfactory Nerve to Optic Nerve, Open Approach'
                ],
                [
                    'name' => 'Isopropyl Alcohol',
                    'description' => 'Therapeutic Exercise Treatment of Circulatory System - Lower Back / Lower Extremity using Prosthesis'
                ],
                [
                    'name' => 'warfarin sodium',
                    'description' => 'Transfer Vagus Nerve to Abducens Nerve, Percutaneous Endoscopic Approach'
                ],
            ]
        );
    }
}
