package com.testcollega.collegatest.mst_cif;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class MstCifController {
    @Autowired MstCifInterface iface;

    @PostMapping("/save")
    public String save(MstCif mstCif){
        iface.save(mstCif);

        return "redirect:/index";
    }
}
