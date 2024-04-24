//
//  view.swift
//  MAD_Ind04_Bombothula_Jahnavi
//
//  Created by Jahnavi Bombothula on 4/23/24.
//
import Foundation

struct Parser {
    func parse(comp: @escaping ([State_Details])->()) {
        let api = URL(string: "https://cs.okstate.edu/~jbombot/MAD.php")

        URLSession.shared.dataTask (with: api!) {
            data, response, error in
            if error != nil {
                print (error?.localizedDescription as Any)
                return
                }
            do {
                let result = try JSONDecoder ().decode(state_struct.self, from: data!)
                comp (result.Fetched_state_details)
            } catch {
                
            }
        }.resume()
    }
}
