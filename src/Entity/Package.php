<?php

namespace PreviewTechs\cPanelWHM\Entity;

class Package
{
    
    /**
     * The hosting plan's featurelist.
     *
     * @var string
     */
    public $featureList;
   
    /**
     * @var string
     */
    
    public $lang;

    /**
     * The account's maximum number of parked domains.
     *
     * Possible values -
     *  unlimited
     *  unknown* — The account cannot use parked domains
     *  an integer that represents a number of parked domains.
     *
     * @var integer
     */
    public $maxPark;

    /**
     * @var string
     */
    public $cpMod;

    /**
     * @var string
     */
    public $maxFtp;

    /**
     * @var string
     */
    public $_packageExt;

     /**
     * The account's maximum number of addon domains.
     *
     * Possible values -
     *  unlimited
     *  unknown* — The account cannot use addon domains
     *  an integer that represents a number of addon domains.
     *
     * @var integer
     */
    public $maxLst;

    /**
     * The hosting plan name.The function returns this value in the pkg hash.
     *
     * @var string
     */
    public $pkgName;

    /**
     * @var string
     */
    public $maxSubDomains;

    /**
     * @var string
     */
    public $maxAddOnDomains;

    /**
     * The percentage of failed or deferred email messages that the account can send per hour
     * before outgoing mail is rate-limited.
     *
     * unlimited / An integer that represents a percentage of messages.
     *
     * @var integer
     */
    public $maxDeferFailPercent;

    /**
     * @var string
     */
    public $maxEmailPerHour;

    /**
     * @var string
     */
    public $maxEmailAccountQuota;

    /**
     * @var string
     */
    public $hasShell;

    /**
     * @var string
     */
    public $maxSql;

    /**
     * @var string
     */
    public $quota;

    /**
     * @var bool
     */
    public $cgi;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $maxPop;

    /**
     * @var string
     */
    public $digestAuth;

    /**
     * @var string
     */
    public $bwlimit;







    /**
     * Get the value of featureList
     */ 
    public function getFeatureList()
    {
        return $this->featureList;
    }

    /**
     * Set the value of featureList
     *
     * @return  self
     */ 
    public function setFeatureList($featureList)
    {
        $this->featureList = $featureList;

        return $this;
    }

    /**
     * Get the value of lang
     */ 
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set the value of lang
     *
     * @return  self
     */ 
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get the value of maxPark
     */ 
    public function getMaxPark()
    {
        return $this->maxPark;
    }

    /**
     * Set the value of maxPark
     *
     * @return  self
     */ 
    public function setMaxPark($maxPark)
    {
        $this->maxPark = $maxPark;

        return $this;
    }

    /**
     * Get the value of cpMod
     */ 
    public function getCpMod()
    {
        return $this->cpMod;
    }

    /**
     * Set the value of cpMod
     *
     * @return  self
     */ 
    public function setCpMod($cpMod)
    {
        $this->cpMod = $cpMod;

        return $this;
    }

    /**
     * Get the value of maxFtp
     */ 
    public function getMaxFtp()
    {
        return $this->maxFtp;
    }

    /**
     * Set the value of maxFtp
     *
     * @return  self
     */ 
    public function setMaxFtp($maxFtp)
    {
        $this->maxFtp = $maxFtp;

        return $this;
    }

    /**
     * Get the value of _packageExt
     */ 
    public function get_packageExt()
    {
        return $this->_packageExt;
    }

    /**
     * Set the value of _packageExt
     *
     * @return  self
     */ 
    public function set_packageExt($_packageExt)
    {
        $this->_packageExt = $_packageExt;

        return $this;
    }

    /**
     * Get the value of maxLst
     */ 
    public function getMaxLst()
    {
        return $this->maxLst;
    }

    /**
     * Set the value of maxLst
     *
     * @return  self
     */ 
    public function setMaxLst($maxLst)
    {
        $this->maxLst = $maxLst;

        return $this;
    }

    /**
     * Get the value of pkgName
     */ 
    public function getPkgName()
    {
        return $this->pkgName;
    }

    /**
     * Set the value of pkgName
     *
     * @return  self
     */ 
    public function setPkgName($pkgName)
    {
        $this->pkgName = $pkgName;

        return $this;
    }

    /**
     * Get the value of maxSubDomains
     */ 
    public function getMaxSubDomains()
    {
        return $this->maxSubDomains;
    }

    /**
     * Set the value of maxSubDomains
     *
     * @return  self
     */ 
    public function setMaxSubDomains($maxSubDomains)
    {
        $this->maxSubDomains = $maxSubDomains;

        return $this;
    }

    /**
     * Get the value of maxAddOnDomains
     */ 
    public function getMaxAddOnDomains()
    {
        return $this->maxAddOnDomains;
    }

    /**
     * Set the value of maxAddOnDomains
     *
     * @return  self
     */ 
    public function setMaxAddOnDomains($maxAddOnDomains)
    {
        $this->maxAddOnDomains = $maxAddOnDomains;

        return $this;
    }

    /**
     * Get the value of maxDeferFailPercent
     */ 
    public function getMaxDeferFailPercent()
    {
        return $this->maxDeferFailPercent;
    }

    /**
     * Set the value of maxDeferFailPercent
     *
     * @return  self
     */ 
    public function setMaxDeferFailPercent($maxDeferFailPercent)
    {
        $this->maxDeferFailPercent = $maxDeferFailPercent;

        return $this;
    }


    /**
     * Get the value of maxEmailPerHour
     */ 
    public function getMaxEmailPerHour()
    {
        return $this->maxEmailPerHour;
    }

    /**
     * Set the value of maxEmailPerHour
     *
     * @return  self
     */ 
    public function setMaxEmailPerHour($maxEmailPerHour)
    {
        $this->maxEmailPerHour = $maxEmailPerHour;

        return $this;
    }

    /**
     * Get the value of maxEmailAccountQuota
     */ 
    public function getMaxEmailAccountQuota()
    {
        return $this->maxEmailAccountQuota;
    }

    /**
     * Set the value of maxEmailAccountQuota
     *
     * @return  self
     */ 
    public function setMaxEmailAccountQuota($maxEmailAccountQuota)
    {
        $this->maxEmailAccountQuota = $maxEmailAccountQuota;

        return $this;
    }

    /**
     * Get the value of hasShell
     */ 
    public function getHasShell()
    {
        return $this->hasShell;
    }

    /**
     * Set the value of hasShell
     *
     * @return  self
     */ 
    public function setHasShell($hasShell)
    {
        $this->hasShell = $hasShell;

        return $this;
    }

    /**
     * Get the value of maxSql
     */ 
    public function getMaxSql()
    {
        return $this->maxSql;
    }

    /**
     * Set the value of maxSql
     *
     * @return  self
     */ 
    public function setMaxSql($maxSql)
    {
        $this->maxSql = $maxSql;

        return $this;
    }

    /**
     * Get the value of quota
     */ 
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * Set the value of quota
     *
     * @return  self
     */ 
    public function setQuota($quota)
    {
        $this->quota = $quota;

        return $this;
    }

    /**
     * Get the value of cgi
     */ 
    public function getCgi()
    {
        return $this->cgi;
    }

    /**
     * Set the value of cgi
     *
     * @return  self
     */ 
    public function setCgi($cgi)
    {
        $this->cgi = $cgi;

        return $this;
    }

    /**
     * Get the value of ip
     */ 
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set the value of ip
     *
     * @return  self
     */ 
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get the value of maxPop
     */ 
    public function getMaxPop()
    {
        return $this->maxPop;
    }

    /**
     * Set the value of maxPop
     *
     * @return  self
     */ 
    public function setMaxPop($maxPop)
    {
        $this->maxPop = $maxPop;

        return $this;
    }

    /**
     * Get the value of digestAuth
     */ 
    public function getDigestAuth()
    {
        return $this->digestAuth;
    }

    /**
     * Set the value of digestAuth
     *
     * @return  self
     */ 
    public function setDigestAuth($digestAuth)
    {
        $this->digestAuth = $digestAuth;

        return $this;
    }

    /**
     * Get the value of bwlimit
     */ 
    public function getBwlimit()
    {
        return $this->bwlimit;
    }

    /**
     * Set the value of bwlimit
     *
     * @return  self
     */ 
    public function setBwlimit($bwlimit)
    {
        $this->bwlimit = $bwlimit;

        return $this;
    }


     /**
     *
     * @param array $package
     *
     * @return Account
     */
    public static function buildFromArray(array $package)
    {
        $ac = new static();

        $ac->setFeatureList($package['feature_list']);
        $ac->setLang($package['lang']);

        if ($package['maxpark'] === "unlimited") {
            $ac->setMaxPark(-1);
        } elseif ($package['maxpark'] === "unknown") {
            $ac->setMaxPark(0);
        } else {
            $ac->setMaxPark(intval($package['maxpark']));
        }

        $ac->setCpMod($package['cpmod']);

        if ($package['maxftp'] === "unlimited") {
            $ac->setMaxFtp(-1);
        } elseif ($package['maxftp'] === "unknown") {
            $ac->setMaxFtp(0);
        } else {
            $ac->setMaxFtp(intval($package['maxftp']));
        }

        $ac->setPkgName($package['package_name']);

        if (! empty($package['package_extensions'])) {
            $ac->set_packageExt($package['package_extensions']);
        }

        if ($package['max_mail_listing'] === "unlimited") {
            $ac->setMaxLst(-1);
        } elseif ($package['max_mail_listing'] === "unknown") {
            $ac->setMaxLst(0);
        } else {
            $ac->setMaxLst(intval($package['max_mail_listing']));
        }

        if ($package['maxaddon'] === "unlimited") {
            $ac->setMaxAddOnDomains(-1);
        } elseif ($package['maxaddon'] === "unknown") {
            $ac->setMaxAddOnDomains(0);
        } else {
            $ac->setMaxAddOnDomains(intval($package['maxaddon']));
        }

        if ($package['max_defer_fail_percent'] === "unlimited") {
            $ac->setMaxDeferFailPercent(-1);
        } elseif ($package['max_defer_fail_percent'] === "unknown") {
            $ac->setMaxDeferFailPercent(0);
        } else {
            $ac->setMaxDeferFailPercent(intval($package['max_defer_fail_percent']));
        }

        if ($package['max_emailacct_quota'] === "unlimited") {
            $ac->setMaxEmailAccountQuota(-1);
        } else {
            $ac->setMaxEmailAccountQuota(intval(str_replace("M", "", $package['max_emailacct_quota'])));
        }

        if ($package['max_email_per_hour'] === "unlimited") {
            $ac->setMaxEmailPerHour(-1);
        } elseif ($package['max_email_per_hour'] === "unknown") {
            $ac->setMaxEmailPerHour(0);
        } else {
            $ac->setMaxEmailPerHour(intval($package['max_email_per_hour']));
        }

        if($package['has_shell']==="y"){
            $ac->setHasShell(true);
        }else{
            $ac->setHasShell(false);
        }

        if ($package['maxsql'] === "unlimited") {
            $ac->setMaxSql(-1);
        } elseif ($package['maxsql'] === "unknown") {
            $ac->setMaxSql(0);
        } else {
            $ac->setMaxSql(intval($package['maxsql']));
        }

        if ($package['quota'] === "unlimited") {
            $ac->setQuota(-1);
        } else {
            $ac->setQuota(intval(str_replace("M", "", $package['quota'])));
        }

        if($package['cgi']){
            $ac->setCgi(true);
        }else{
            $ac->setCgi(false);
        }

        if($package['ip']==="y"){
            $ac->setIp("Dedicated IP address");
        }else{
            $ac->setIp("Shared IP address");
        }

        if ($package['maxsub'] === "unlimited") {
            $ac->setMaxSubDomains(-1);
        } elseif ($package['maxsub'] === "unknown") {
            $ac->setMaxSubDomains(0);
        } else {
            $ac->setMaxSubDomains(intval($package['maxsub']));
        }

        if($package['digestauth']==="y"){
            $ac->setDigestAuth("Enabled");
        }else{
            $ac->setDigestAuth("Disabled");
        }

        if ($package['bandwidth_limit'] === "unlimited") {
            $ac->setBwlimit(-1);
        } else {
            $ac->setBwlimit(intval(str_replace("M", "", $package['bandwidth_limit'])));
        }


        return $ac;
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'feature_list'                         => $this->getFeatureList(),
            'lang'                                 => $this->getLang(),
            'maxpark'                              => $this->getMaxPark(),
            'cpmod'                                => $this->getCpMod(),
            'maxftp'                               => $this->getMaxFtp(),
            'package_name'                         => $this->getPkgName(),
            'package_extensions'                   => $this->get_packageExt(),
            'max_mail_listing'                     => $this->getMaxLst,
            'maxaddon'                             => $this->getMaxAddOnDomains(),
            'max_defer_fail_percent'               => $this->getMaxDeferFailPercent(),
            'max_emailacct_quota'                  => $this->getMaxEmailAccountQuota(),
            'max_email_per_hour'                   => $this->getMaxEmailPerHour(),
            'has_shell'                            => $this->getHasShell(),
            'maxsql'                               => $this->getMaxSql(),
            'quota'                                => $this->getQuota(),
            'cgi'                                  => $this->getCgi,
            'ip'                                   => $this->getIp(),
            'maxsub'                               => $this->getMaxSubDomains(),
            'digestauth'                           => $this->getDigestAuth(),
            'bandwidth_limit'                      => $this->getBwlimit()           
        ];
    }
}