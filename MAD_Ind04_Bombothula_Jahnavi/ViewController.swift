//
//  ViewController.swift
//  MAD_Ind04_Bombothula_Jahnavi
//
//  Created by Jahnavi Bombothula on 4/21/24.
//

import UIKit

class ViewController: UIViewController {
    
    let parser = Parser()
    var states = [State_Details]()
    
    
    @IBOutlet weak var TableView: UITableView!
    var spinner: UIActivityIndicatorView!
    
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        // Initialize the spinner
                spinner = UIActivityIndicatorView(style: .large)
                spinner.center = self.view.center // Position the spinner in the center of ViewController
                spinner.hidesWhenStopped = true
                self.view.addSubview(spinner) // Add the spinner to the view
                
                // Start the spinner
                spinner.startAnimating()
        
        // Parse data from the server
        parser.parse {
            data in
            self.states = data
            DispatchQueue.main.async {
                self.TableView.reloadData()
                // Stop the spinner once the data is loaded
                                self.spinner.stopAnimating()
            }
        }
        TableView.dataSource = self

        }
}

extension ViewController: UITableViewDataSource {
    func tableView( _ tableView: UITableView, numberOfRowsInSection section: Int)-> Int {
        return states.count
    }
    //Function to get count of records in the Table.
    func tableView( _ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCell(withIdentifier: "Table View Cell", for: indexPath)
        cell.textLabel?.text = states[indexPath.row].name
        cell.detailTextLabel?.text = states[indexPath.row].nickname

        return cell
        }
    }



