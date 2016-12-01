//
//  FirstViewController.swift
//  Alphex
//
//  Created by Charles Fries on 10/23/16.
//  Copyright © 2016 Charles Fries. All rights reserved.
//

import UIKit

class FirstViewController: UIViewController
{
    override func viewDidLoad()
    {
        // UIApplication.shared.statusBarStyle = .default
        
        navigationController?.navigationBar.barTintColor = UIColor(red:0.00, green:0.46, blue:0.83, alpha:1.00)
        navigationController?.navigationBar.barStyle = UIBarStyle.black
        navigationController?.navigationBar.tintColor = UIColor.white
        
        // self.navigationController!.navigationBar.isTranslucent = false
        
        let titleDict: NSDictionary = [NSForegroundColorAttributeName: UIColor.white]
        self.navigationController?.navigationBar.titleTextAttributes = titleDict as? [String : Any]
    }
}
