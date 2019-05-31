<?php

namespace FondOfSpryker\Zed\ShipmentDeliveryNote\Business;

use Generated\Shared\Transfer\ShipmentDeliveryNoteListTransfer;
use Generated\Shared\Transfer\ShipmentDeliveryNoteResponseTransfer;
use Generated\Shared\Transfer\ShipmentDeliveryNoteTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\ShipmentDeliveryNote\Business\ShipmentDeliveryNoteBusinessFactory getFactory()
 */
class ShipmentDeliveryNoteFacade extends AbstractFacade implements ShipmentDeliveryNoteFacadeInterface
{
    /**
     * @param \FondOfSpryker\Zed\ShipmentDeliveryNote\Business\ShipmentDeliveryNoteListTransfer $shipmentDeliveryNoteListTransfer
     * @param string $orderReference
     *
     * @return \Generated\Shared\Transfer\ShipmentDeliveryNoteResponseTransfer
     */
    public function findShipmentDeliveryNotesByOrderReference(
        ShipmentDeliveryNoteListTransfer $shipmentDeliveryNoteListTransfer,
        string $orderReference): ShipmentDeliveryNoteListTransfer
    {
        return $this->getFactory()->createShipmentDeliveryNoteReader()->findShipmentDeliveryNotesByOrderReference($shipmentDeliveryNoteListTransfer, $orderReference);
    }

    /**
     * @param \FondOfSpryker\Zed\ShipmentDeliveryNote\Business\ShipmentDeliveryNoteTransfer $shipmentDeliveryNoteTransfer
     * 
     * @return \Generated\Shared\Transfer\ShipmentDeliveryNoteResponseTransfer
     */
    public function createShipmentDeliveryNote(ShipmentDeliveryNoteTransfer $shipmentDeliveryNoteTransfer): ShipmentDeliveryNoteResponseTransfer
    {
        return $this->getFactory()
            ->createShipmentDeliveryNote()
            ->create($shipmentDeliveryNoteTransfer);
    }

}
