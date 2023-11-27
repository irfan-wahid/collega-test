package com.testcollega.collegatest.mst_cif;

import jakarta.persistence.*;

@Entity
public class MstCif {

    @Id
    private String cifid;

    @Column(length = 10)
    private String AOID;

    private String DTJOIN;

    @Column(length = 60)
    private String FULLNM;

    @Column(length = 20)
    private String NPWP;

    @Column(length = 6)
    private Integer CIFTYPE;

    @Column(length = 2)
    private Character COUNTRYID;

    @Column(length = 6)
    private Integer FLGRELATED;

    @Column(length = 1)
    private Character STATUS;

    @Column(length = 6)
    private Integer FLGAPPRV;

    public String getCIFID() {
        return cifid;
    }

    public void setCIFID(String CIFID) {
        this.cifid = CIFID;
    }

    public String getAOID() {
        return AOID;
    }

    public void setAOID(String AOID) {
        this.AOID = AOID;
    }

    public String getDTJOIN() {
        return DTJOIN;
    }

    public void setDTJOIN(String DTJOIN) {
        this.DTJOIN = DTJOIN;
    }

    public String getFULLNM() {
        return FULLNM;
    }

    public void setFULLNM(String FULLNM) {
        this.FULLNM = FULLNM;
    }

    public String getNPWP() {
        return NPWP;
    }

    public void setNPWP(String NPWP) {
        this.NPWP = NPWP;
    }

    public Integer getCIFTYPE() {
        return CIFTYPE;
    }

    public void setCIFTYPE(Integer CIFTYPE) {
        this.CIFTYPE = CIFTYPE;
    }

    public Character getCOUNTRYID() {
        return COUNTRYID;
    }

    public void setCOUNTRYID(Character COUNTRYID) {
        this.COUNTRYID = COUNTRYID;
    }

    public Integer getFLGRELATED() {
        return FLGRELATED;
    }

    public void setFLGRELATED(Integer FLGRELATED) {
        this.FLGRELATED = FLGRELATED;
    }

    public Character getSTATUS() {
        return STATUS;
    }

    public void setSTATUS(Character STATUS) {
        this.STATUS = STATUS;
    }

    public Integer getFLGAPPRV() {
        return FLGAPPRV;
    }

    public void setFLGAPPRV(Integer FLGAPPRV) {
        this.FLGAPPRV = FLGAPPRV;
    }

    public String getUSRCRT() {
        return USRCRT;
    }

    public void setUSRCRT(String USRCRT) {
        this.USRCRT = USRCRT;
    }

    @Column(length = 5)
    private String USRCRT;
}
