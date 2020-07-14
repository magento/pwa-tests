<?php
namespace Magento\AcceptanceTest\_default\Backend;

use Magento\FunctionalTestingFramework\AcceptanceTester;
use \Codeception\Util\Locator;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * @Title("MC-32192: Verify Add/Remove Cart promotions")
 * @Description("Verify Add/Remove Cart promotions<h3>Test files</h3>app/code/Magento/Pwa/Test/Mftf/Test/VeniaCartPageRemoveCartPromations.xml<br>")
 * @TestCaseId("MC-32192")
 * @group PWA
 * @group Cart
 */
class RemoveCartPromotionsCest
{
	/**
	  * @param AcceptanceTester $I
	  * @throws \Exception
	  */
	public function _before(AcceptanceTester $I)
	{
		$I->comment("Entering Action Group [goToVeniaDesktopStorefront1] GoToVeniaDesktopStorefront");
		$I->amOnPage("/"); // stepKey: goToVeniaStorefront1GoToVeniaDesktopStorefront1
		$I->waitForPwaElementVisible("[class*='categoryTile-image'][alt*='Shop The Look']", 30); // stepKey: waitForPwaCategoryVisible01GoToVeniaDesktopStorefront1
		$I->comment("Exiting Action Group [goToVeniaDesktopStorefront1] GoToVeniaDesktopStorefront");
		$I->comment("Entering Action Group [goToProductDetailsPage] GoToProductDetailsPage");
		$I->amOnPage("/valeria-two-layer-tank.html"); // stepKey: goToVeniaProductDetailsPageGoToProductDetailsPage
		$I->waitForPwaElementVisible("[class*='productFullDetail-productName-']", 30); // stepKey: waitForPwaElementVisible1GoToProductDetailsPage
		$I->comment("Exiting Action Group [goToProductDetailsPage] GoToProductDetailsPage");
		$I->comment("Entering Action Group [addProductToCartWithColorAndSizeAndQuantityOptions1] SetProductColorAndSizeAndQuantityOptions");
		$I->wait(5); // stepKey: wait123AddProductToCartWithColorAndSizeAndQuantityOptions1
		$I->waitForPwaElementVisible("[class*='swatch-root-'][title='Lilac']", 30); // stepKey: waitFOrProducttoDisplayAddProductToCartWithColorAndSizeAndQuantityOptions1
		$I->click("[class*='swatch-root-'][title='Lilac']"); // stepKey: clickOnColorOption01AddProductToCartWithColorAndSizeAndQuantityOptions1
		$I->click("//*[contains(@class, 'tileList-root-')]//span[contains(text(), 'L')]"); // stepKey: clickOnSizeOption01AddProductToCartWithColorAndSizeAndQuantityOptions1
		$I->selectOption("[class*='quantity-root-'] [name*='quantity']", "2"); // stepKey: selectProductQuantity01AddProductToCartWithColorAndSizeAndQuantityOptions1
		$I->comment("Exiting Action Group [addProductToCartWithColorAndSizeAndQuantityOptions1] SetProductColorAndSizeAndQuantityOptions");
		$I->comment("Entering Action Group [waitForElementToLoad] TemporaryWait3");
		$I->wait(3); // stepKey: waitForElementToLoadWaitForElementToLoad
		$I->comment("Exiting Action Group [waitForElementToLoad] TemporaryWait3");
		$I->comment("Entering Action Group [addToCart1] AddToCart");
		$I->waitForPwaElementVisible("[class*='productFullDetail-cartActions-'] button", 30); // stepKey: waitForAddToCartButtonToBeReadyAddToCart1
		$I->click("[class*='productFullDetail-cartActions-'] button"); // stepKey: clickAddToCart1AddToCart1
		$I->wait(10); // stepKey: wait1134AddToCart1
		$I->waitForPwaElementVisible("//div[contains(@class, 'cartTrigger-triggerContainer-')]//span[contains(@class, 'cartTrigger-counter-')]", 30); // stepKey: waitForShoppingCartToUpdateAddToCart1
		$I->seeElement("//div[contains(@class, 'cartTrigger-triggerContainer-')]//span[contains(@class, 'cartTrigger-counter-')]"); // stepKey: assertElementExistsAddToCart1
		$I->dontSeeElement("//div[contains(@class, 'cartTrigger-triggerContainer-')]/button[contains(@aria-label, 'Toggle mini cart. You have 0 items in your cart.')]"); // stepKey: assertEmptyCartDoesNotExistsAddToCart1
		$I->comment("Exiting Action Group [addToCart1] AddToCart");
		$I->comment("Entering Action Group [waitForElementToLoad5] TemporaryWait5");
		$I->wait(5); // stepKey: waitForElementToLoadWaitForElementToLoad5
		$I->comment("Exiting Action Group [waitForElementToLoad5] TemporaryWait5");
	}

	/**
	 * @Features({"Pwa"})
	 * @Stories({"Cart Page"})
	 * @Severity(level = SeverityLevel::NORMAL)
	 * @Parameter(name = "AcceptanceTester", value="$I")
	 * @param AcceptanceTester $I
	 * @return void
	 * @throws \Exception
	 */
	public function RemoveCartPromotions(AcceptanceTester $I)
	{
		$I->comment("Entering Action Group [removeItemFromTheCartPage] GoToCartPage");
		$I->amOnPage("/cart"); // stepKey: goToCartPageRemoveItemFromTheCartPage
		$I->wait(5); // stepKey: temporaryStaticWait1RemoveItemFromTheCartPage
		$I->comment("Exiting Action Group [removeItemFromTheCartPage] GoToCartPage");
		$I->comment("Entering Action Group [verifyCouponCodeGetsAdded] AddCouponCode");
		$I->click("//button[contains(@class, 'section-title_container-')]//span[contains(text(), 'Enter Coupon Code')]"); // stepKey: expandCouponAccordionVerifyCouponCodeGetsAdded
		$I->wait(2); // stepKey: wait1VerifyCouponCodeGetsAdded
		$I->fillField("[id='couponCode']", "PWA1423"); // stepKey: enterCouponCodeVerifyCouponCodeGetsAdded
		$I->wait(1); // stepKey: wait4VerifyCouponCodeGetsAdded
		$I->click("//form[contains(@class, 'couponCode-entryForm-')]//span[contains(text(), 'Apply')]"); // stepKey: applyCouponCodeVerifyCouponCodeGetsAdded
		$I->wait(10); // stepKey: wait5VerifyCouponCodeGetsAdded
		$I->seeElement("//button[contains(@class, 'couponCode-removeButton-')]/span[contains(text(), 'Remove')]"); // stepKey: verifyRemoveCodeLinkVerifyCouponCodeGetsAdded
		$I->see("PWA1423"); // stepKey: seeAppliedCouponCodeVerifyCouponCodeGetsAdded
		$I->see("Discounts applied"); // stepKey: seeAppliedDiscountLabelVerifyCouponCodeGetsAdded
		$I->comment("Exiting Action Group [verifyCouponCodeGetsAdded] AddCouponCode");
		$I->comment("Entering Action Group [addGiftCard] AddGiftCard");
		$I->click("//button[contains(@class, 'section-title_container-')]//span[contains(text(), 'Apply Gift Card')]"); // stepKey: expandGiftCardAccordionAddGiftCard
		$I->wait(2); // stepKey: wait1AddGiftCard
		$I->seeElement("//span[contains(text(), 'Check balance')]"); // stepKey: assertCheckGiftCardBalanceLinkAddGiftCard
		$I->fillField("[id*='giftCards-card-']", "02Y0LCHUNDRZ"); // stepKey: enterGiftCardCodeAddGiftCard
		$I->wait(1); // stepKey: wait4AddGiftCard
		$I->click("//div[contains(@class, 'giftCards-card-')]//span[contains(text(), 'Apply')]"); // stepKey: applyCouponCodeAddGiftCard
		$I->wait(5); // stepKey: wait5AddGiftCard
		$I->seeElement("//div[contains(@class, 'giftCards-cards_container-')]//span[contains(text(), 'Remove')]"); // stepKey: verifyRemoveGiftCardLinkAddGiftCard
		$I->seeElement("//span[contains(text(), 'Check balance')]"); // stepKey: assertCheckGiftCardBalanceLink2AddGiftCard
		$I->see("02Y0LCHUNDRZ"); // stepKey: seeAppliedGiftCardAddGiftCard
		$I->see("Gift Card(s) applied"); // stepKey: seeAppliedGiftCardLabelAddGiftCard
		$I->comment("Exiting Action Group [addGiftCard] AddGiftCard");
		$I->comment("Entering Action Group [removeCouponCode] RemoveCouponCode");
		$I->click("//button[contains(@class, 'couponCode-removeButton-')]/span[contains(text(), 'Remove')]"); // stepKey: removeCouponCodeRemoveCouponCode
		$I->wait(5); // stepKey: wait5RemoveCouponCode
		$I->seeElement("[id='couponCode']"); // stepKey: seeCouponCodeTextFieldRemoveCouponCode
		$I->seeElement("//form[contains(@class, 'couponCode-entryForm-')]//span[contains(text(), 'Apply')]"); // stepKey: seeApplyButtonRemoveCouponCode
		$I->dontSee("PWA1423"); // stepKey: doNotAppliedCouponCodeRemoveCouponCode
		$I->dontSee("Discounts applied"); // stepKey: doNotSeeAppliedDiscountLabelRemoveCouponCode
		$I->comment("Exiting Action Group [removeCouponCode] RemoveCouponCode");
		$I->comment("Entering Action Group [removeGiftCard] RemoveGiftCard");
		$I->click("//div[contains(@class, 'giftCards-cards_container-')]//span[contains(text(), 'Remove')]"); // stepKey: removeGiftCardRemoveGiftCard
		$I->wait(5); // stepKey: wait5RemoveGiftCard
		$I->seeElement("[id*='giftCards-card-']"); // stepKey: seeGiftCardTextFieldRemoveGiftCard
		$I->seeElement("//div[contains(@class, 'giftCards-card-')]//span[contains(text(), 'Apply')]"); // stepKey: seeApplyGiftCardButtonRemoveGiftCard
		$I->seeElement("//span[contains(text(), 'Check balance')]"); // stepKey: assertCheckGiftCardBalanceLinkRemoveGiftCard
		$I->dontSee("02Y0LCHUNDRZ"); // stepKey: doNotSeeAppliedGiftCardRemoveGiftCard
		$I->dontSee("Gift Card(s) applied"); // stepKey: doNotSeeAppliedGiftCardLabelRemoveGiftCard
		$I->comment("Exiting Action Group [removeGiftCard] RemoveGiftCard");
	}
}
