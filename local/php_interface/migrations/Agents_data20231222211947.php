<?php

namespace Sprint\Migration;


class Agents_data20231222211947 extends Version
{
    protected $description   = "";
    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $this->getExchangeManager()
             ->HlblockElementsImport()
             ->setExchangeResource('hlblock_elements.xml')
             ->setLimit(20)
             ->execute(function ($item) {
                 $this->getHelperManager()
                      ->Hlblock()
                      ->addElement(
                          $item['hlblock_id'],
                          $item['fields']
                      );
             });
    }

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function down()
    {
		$helper = $this->getHelperManager();
		$hlblockId = $helper->Hlblock()->getHlblockIdIfExists('Agencies');

		$dbRes = CIBlockElement::GetList([], ['IBLOCK_ID' => $hlblockId], false, ['nTopCount' => 10]);

        $bFound = 0;

        while ($aItem = $dbRes->Fetch()) {
            $helper->Iblock()->deleteElement($aItem['ID']);
            $this->out('deleted %d', $aItem['ID']);
            $bFound++;
        }

        if ($bFound) {
            $this->restart();
        }
    }


}
