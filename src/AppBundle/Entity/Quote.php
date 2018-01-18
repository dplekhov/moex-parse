<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Quote
 *
 * @ORM\Table(name="quote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteRepository")
 */
class Quote implements EntityInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_name", type="string", length=255)
     */
    private $secName;
    /**
     * @var string
     *
     * @ORM\Column(name="short_name", type="string", length=255)
     */
    private $shortName;
    /**
     * @var string
     *
     * @ORM\Column(name="lat_name", type="string", length=255)
     */
    private $latName;
    /**
     * @var integer
     *
     * @ORM\Column(name="decimals", type="integer")
     */
    private $decimals;
    /**
     * @var float
     *
     * @ORM\Column(name="prev_price", type="float")
     */
    private $prevPrice;
    /**
     * @var string
     *
     * @ORM\Column(name="board_id", type="string", length=255)
     */
    private $boardId;
    /**
     * @var string
     *
     * @ORM\Column(name="sec_id", type="string", length=255)
     */
    private $secId;
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;
    /**
     * @var float
     *
     * @ORM\Column(name="bid", type="float")
     */
    private $bid;
    /**
     * @var integer
     *
     * @ORM\Column(name="bid_depth", type="integer")
     */
    private $bidDepth;
    /**
     * @var integer
     *
     * @ORM\Column(name="num_bids", type="integer")
     */
    private $numBids;
    /**
     * @var float
     *
     * @ORM\Column(name="offer", type="float")
     */
    private $offer;
    /**
     * @var integer
     *
     * @ORM\Column(name="offer_depth", type="integer")
     */
    private $offerDepth;
    /**
     * @var integer
     *
     * @ORM\Column(name="offer_deptht", type="integer")
     */
    private $offerDeptht;
    /**
     * @var integer
     *
     * @ORM\Column(name="num_offers", type="integer")
     */
    private $numOffers;
    /**
     * @var float
     *
     * @ORM\Column(name="open", type="float")
     */
    private $open;
    /**
     * @var float
     *
     * @ORM\Column(name="high", type="float")
     */
    private $high;
    /**
     * @var float
     *
     * @ORM\Column(name="last", type="float")
     */
    private $last;
    /**
     * @var float
     *
     * @ORM\Column(name="change", type="float")
     */
    private $change;
    /**
     * @var float
     *
     * @ORM\Column(name="last_change_prcnt", type="float")
     */
    private $lastChangePrcnt;
    /**
     * @var float
     *
     * @ORM\Column(name="last_to_prev_price", type="float")
     */
    private $lastToPrevPrice;
    /**
     * @var integer
     *
     * @ORM\Column(name="qty", type="integer")
     */
    private $qty;
    /**
     * @var DateTime
     *
     * @ORM\Column(name="time", type="time")
     */
    private $time;
    /**
     * @var integer
     *
     * @ORM\Column(name="vol_today", type="integer")
     */
    private $volToday;
    /**
     * @var integer
     *
     * @ORM\Column(name="val_today", type="integer")
     */
    private $valToday;
    /**
     * @var float
     *
     * @ORM\Column(name="val_today_usd", type="float")
     */
    private $valTodayUsd;
    /**
     * @var string
     *
     * @ORM\Column(name="trading_status", type="string", length=1)
     */
    private $tradingStatus;
    /**
     * @var float
     *
     * @ORM\Column(name="value", type="float")
     */
    private $value;
    /**
     * @var float
     *
     * @ORM\Column(name="value_usd", type="float")
     */
    private $valueUsd;
    /**
     * @var float
     *
     * @ORM\Column(name="wa_price", type="float")
     */
    private $waPrice;
    /**
     * @var float
     *
     * @ORM\Column(name="wap_to_prev_wa_price_prcnt", type="float")
     */
    private $wapToPrevWaPricePrcnt;
    /**
     * @var float
     *
     * @ORM\Column(name="wap_to_prev_wa_price", type="float")
     */
    private $wapToPrevWaPrice;
    /**
     * @var float
     *
     * @ORM\Column(name="high_bid", type="float")
     */
    private $highBid;
    /**
     * @var float
     *
     * @ORM\Column(name="low_offer", type="float")
     */
    private $lowOffer;
    /**
     * @var integer
     *
     * @ORM\Column(name="num_trades", type="integer")
     */
    private $numTrades;
    /**
     * @var float
     *
     * @ORM\Column(name="price_minus_prev_wa_price", type="float")
     */
    private $priceMinusPrevWaPrice;
    /**
     * @var float
     *
     * @ORM\Column(name="close_price", type="float")
     */
    private $closePrice;
    /**
     * @var float
     *
     * @ORM\Column(name="last_bid", type="float")
     */
    private $lastBid;
    /**
     * @var float
     *
     * @ORM\Column(name="last_offer", type="float")
     */
    private $last_offer;
    /**
     * @var float
     *
     * @ORM\Column(name="market_price", type="float")
     */
    private $marketPrice;
    /**
     * @var float
     *
     * @ORM\Column(name="market_price_today", type="float")
     */
    private $marketPriceToday;
    /**
     * @var float
     *
     * @ORM\Column(name="l_open_price", type="float")
     */
    private $lOpenPrice;
    /**
     * @var float
     *
     * @ORM\Column(name="l_current_price", type="float")
     */
    private $lCurrentPrice;
    /**
     * @var float
     *
     * @ORM\Column(name="l_close_price", type="float")
     */
    private $lClosePrice;
    /**
     * @var float
     *
     * @ORM\Column(name="market_price2", type="float")
     */
    private $marketPrice2;
    /**
     * @var float
     *
     * @ORM\Column(name="admitted_quote", type="float")
     */
    private $admittedQuote;
    /**
     * @var float
     *
     * @ORM\Column(name="open_period_price", type="float")
     */
    private $openPeriodPrice;
    /**
     * @var float
     *
     * @ORM\Column(name="update_time", type="float")
     */
    private $updateTime;
    /**
     * @var float
     *
     * @ORM\Column(name="seq_num", type="float")
     */
    private $seqNum;
    /**
     * @var float
     *
     * @ORM\Column(name="spread", type="float")
     */
    private $spread;
    /**
     * @var float
     *
     * @ORM\Column(name="last_change", type="float")
     */
    private $last_change;
    /**
     * @var DateTime
     *
     * @ORM\Column(name="systime", type="datetime")
     */
    private $systime;
    /**
     * Active flag.
     *
     * @var boolean $active
     *
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * Quote constructor.
     */
    public function __construct()
    {
        $this->active = true;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSecName()
    {
        return $this->secName;
    }

    /**
     * @param string $secName
     */
    public function setSecName($secName)
    {
        $this->secName = $secName;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    }

    /**
     * @return string
     */
    public function getLatName()
    {
        return $this->latName;
    }

    /**
     * @param string $latName
     */
    public function setLatName($latName)
    {
        $this->latName = $latName;
    }

    /**
     * @return int
     */
    public function getDecimals()
    {
        return $this->decimals;
    }

    /**
     * @param int $decimals
     */
    public function setDecimals($decimals)
    {
        $this->decimals = $decimals;
    }

    /**
     * @return float
     */
    public function getPrevPrice()
    {
        return $this->prevPrice;
    }

    /**
     * @param float $prevPrice
     */
    public function setPrevPrice($prevPrice)
    {
        $this->prevPrice = $prevPrice;
    }

    /**
     * @return string
     */
    public function getBoardId()
    {
        return $this->boardId;
    }

    /**
     * @param string $boardId
     */
    public function setBoardId($boardId)
    {
        $this->boardId = $boardId;
    }

    /**
     * @return string
     */
    public function getSecId()
    {
        return $this->secId;
    }

    /**
     * @param string $secId
     */
    public function setSecId($secId)
    {
        $this->secId = $secId;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return float
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param float $bid
     */
    public function setBid($bid)
    {
        $this->bid = $bid;
    }

    /**
     * @return int
     */
    public function getBidDepth()
    {
        return $this->bidDepth;
    }

    /**
     * @param int $bidDepth
     */
    public function setBidDepth($bidDepth)
    {
        $this->bidDepth = $bidDepth;
    }

    /**
     * @return int
     */
    public function getNumBids()
    {
        return $this->numBids;
    }

    /**
     * @param int $numBids
     */
    public function setNumBids($numBids)
    {
        $this->numBids = $numBids;
    }

    /**
     * @return float
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @param float $offer
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;
    }

    /**
     * @return int
     */
    public function getOfferDepth()
    {
        return $this->offerDepth;
    }

    /**
     * @param int $offerDepth
     */
    public function setOfferDepth($offerDepth)
    {
        $this->offerDepth = $offerDepth;
    }

    /**
     * @return int
     */
    public function getOfferDeptht()
    {
        return $this->offerDeptht;
    }

    /**
     * @param int $offerDeptht
     */
    public function setOfferDeptht($offerDeptht)
    {
        $this->offerDeptht = $offerDeptht;
    }

    /**
     * @return int
     */
    public function getNumOffers()
    {
        return $this->numOffers;
    }

    /**
     * @param int $numOffers
     */
    public function setNumOffers($numOffers)
    {
        $this->numOffers = $numOffers;
    }

    /**
     * @return float
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * @param float $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }

    /**
     * @return float
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param float $high
     */
    public function setHigh($high)
    {
        $this->high = $high;
    }

    /**
     * @return float
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param float $last
     */
    public function setLast($last)
    {
        $this->last = $last;
    }

    /**
     * @return float
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @param float $change
     */
    public function setChange($change)
    {
        $this->change = $change;
    }

    /**
     * @return float
     */
    public function getLastChangePrcnt()
    {
        return $this->lastChangePrcnt;
    }

    /**
     * @param float $lastChangePrcnt
     */
    public function setLastChangePrcnt($lastChangePrcnt)
    {
        $this->lastChangePrcnt = $lastChangePrcnt;
    }

    /**
     * @return float
     */
    public function getLastToPrevPrice()
    {
        return $this->lastToPrevPrice;
    }

    /**
     * @param float $lastToPrevPrice
     */
    public function setLastToPrevPrice($lastToPrevPrice)
    {
        $this->lastToPrevPrice = $lastToPrevPrice;
    }

    /**
     * @return int
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param int $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param DateTime $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getVolToday()
    {
        return $this->volToday;
    }

    /**
     * @param int $volToday
     */
    public function setVolToday($volToday)
    {
        $this->volToday = $volToday;
    }

    /**
     * @return int
     */
    public function getValToday()
    {
        return $this->valToday;
    }

    /**
     * @param int $valToday
     */
    public function setValToday($valToday)
    {
        $this->valToday = $valToday;
    }

    /**
     * @return float
     */
    public function getValTodayUsd()
    {
        return $this->valTodayUsd;
    }

    /**
     * @param float $valTodayUsd
     */
    public function setValTodayUsd($valTodayUsd)
    {
        $this->valTodayUsd = $valTodayUsd;
    }

    /**
     * @return string
     */
    public function getTradingStatus()
    {
        return $this->tradingStatus;
    }

    /**
     * @param string $tradingStatus
     */
    public function setTradingStatus($tradingStatus)
    {
        $this->tradingStatus = $tradingStatus;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValueUsd()
    {
        return $this->valueUsd;
    }

    /**
     * @param float $valueUsd
     */
    public function setValueUsd($valueUsd)
    {
        $this->valueUsd = $valueUsd;
    }

    /**
     * @return float
     */
    public function getWaPrice()
    {
        return $this->waPrice;
    }

    /**
     * @param float $waPrice
     */
    public function setWaPrice($waPrice)
    {
        $this->waPrice = $waPrice;
    }

    /**
     * @return float
     */
    public function getWapToPrevWaPricePrcnt()
    {
        return $this->wapToPrevWaPricePrcnt;
    }

    /**
     * @param float $wapToPrevWaPricePrcnt
     */
    public function setWapToPrevWaPricePrcnt($wapToPrevWaPricePrcnt)
    {
        $this->wapToPrevWaPricePrcnt = $wapToPrevWaPricePrcnt;
    }

    /**
     * @return float
     */
    public function getWapToPrevWaPrice()
    {
        return $this->wapToPrevWaPrice;
    }

    /**
     * @param float $wapToPrevWaPrice
     */
    public function setWapToPrevWaPrice($wapToPrevWaPrice)
    {
        $this->wapToPrevWaPrice = $wapToPrevWaPrice;
    }

    /**
     * @return float
     */
    public function getHighBid()
    {
        return $this->highBid;
    }

    /**
     * @param float $highBid
     */
    public function setHighBid($highBid)
    {
        $this->highBid = $highBid;
    }

    /**
     * @return float
     */
    public function getLowOffer()
    {
        return $this->lowOffer;
    }

    /**
     * @param float $lowOffer
     */
    public function setLowOffer($lowOffer)
    {
        $this->lowOffer = $lowOffer;
    }

    /**
     * @return int
     */
    public function getNumTrades()
    {
        return $this->numTrades;
    }

    /**
     * @param int $numTrades
     */
    public function setNumTrades($numTrades)
    {
        $this->numTrades = $numTrades;
    }

    /**
     * @return float
     */
    public function getPriceMinusPrevWaPrice()
    {
        return $this->priceMinusPrevWaPrice;
    }

    /**
     * @param float $priceMinusPrevWaPrice
     */
    public function setPriceMinusPrevWaPrice($priceMinusPrevWaPrice)
    {
        $this->priceMinusPrevWaPrice = $priceMinusPrevWaPrice;
    }

    /**
     * @return float
     */
    public function getClosePrice()
    {
        return $this->closePrice;
    }

    /**
     * @param float $closePrice
     */
    public function setClosePrice($closePrice)
    {
        $this->closePrice = $closePrice;
    }

    /**
     * @return float
     */
    public function getLastBid()
    {
        return $this->lastBid;
    }

    /**
     * @param float $lastBid
     */
    public function setLastBid($lastBid)
    {
        $this->lastBid = $lastBid;
    }

    /**
     * @return float
     */
    public function getLastOffer()
    {
        return $this->last_offer;
    }

    /**
     * @param float $last_offer
     */
    public function setLastOffer($last_offer)
    {
        $this->last_offer = $last_offer;
    }

    /**
     * @return float
     */
    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    /**
     * @param float $marketPrice
     */
    public function setMarketPrice($marketPrice)
    {
        $this->marketPrice = $marketPrice;
    }

    /**
     * @return float
     */
    public function getMarketPriceToday()
    {
        return $this->marketPriceToday;
    }

    /**
     * @param float $marketPriceToday
     */
    public function setMarketPriceToday($marketPriceToday)
    {
        $this->marketPriceToday = $marketPriceToday;
    }

    /**
     * @return float
     */
    public function getLOpenPrice()
    {
        return $this->lOpenPrice;
    }

    /**
     * @param float $lOpenPrice
     */
    public function setLOpenPrice($lOpenPrice)
    {
        $this->lOpenPrice = $lOpenPrice;
    }

    /**
     * @return float
     */
    public function getLCurrentPrice()
    {
        return $this->lCurrentPrice;
    }

    /**
     * @param float $lCurrentPrice
     */
    public function setLCurrentPrice($lCurrentPrice)
    {
        $this->lCurrentPrice = $lCurrentPrice;
    }

    /**
     * @return float
     */
    public function getLClosePrice()
    {
        return $this->lClosePrice;
    }

    /**
     * @param float $lClosePrice
     */
    public function setLClosePrice($lClosePrice)
    {
        $this->lClosePrice = $lClosePrice;
    }

    /**
     * @return float
     */
    public function getMarketPrice2()
    {
        return $this->marketPrice2;
    }

    /**
     * @param float $marketPrice2
     */
    public function setMarketPrice2($marketPrice2)
    {
        $this->marketPrice2 = $marketPrice2;
    }

    /**
     * @return float
     */
    public function getAdmittedQuote()
    {
        return $this->admittedQuote;
    }

    /**
     * @param float $admittedQuote
     */
    public function setAdmittedQuote($admittedQuote)
    {
        $this->admittedQuote = $admittedQuote;
    }

    /**
     * @return float
     */
    public function getOpenPeriodPrice()
    {
        return $this->openPeriodPrice;
    }

    /**
     * @param float $openPeriodPrice
     */
    public function setOpenPeriodPrice($openPeriodPrice)
    {
        $this->openPeriodPrice = $openPeriodPrice;
    }

    /**
     * @return float
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param float $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return float
     */
    public function getSeqNum()
    {
        return $this->seqNum;
    }

    /**
     * @param float $seqNum
     */
    public function setSeqNum($seqNum)
    {
        $this->seqNum = $seqNum;
    }

    /**
     * @return float
     */
    public function getSpread()
    {
        return $this->spread;
    }

    /**
     * @param float $spread
     */
    public function setSpread($spread)
    {
        $this->spread = $spread;
    }

    /**
     * @return float
     */
    public function getLastChange()
    {
        return $this->last_change;
    }

    /**
     * @param float $last_change
     */
    public function setLastChange($last_change)
    {
        $this->last_change = $last_change;
    }

    /**
     * @return DateTime
     */
    public function getSystime()
    {
        return $this->systime;
    }

    /**
     * @param DateTime $systime
     */
    public function setSystime($systime)
    {
        $this->systime = $systime;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getTitle();
    }
}

