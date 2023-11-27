package com.testcollega.collegatest;

import com.testcollega.collegatest.mst_cif.MstCif;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class MainController {

    @GetMapping("")
    public String showHomePage(Model model){
        model.addAttribute("data", new MstCif());

        return "index";
    }

}