//
//  Model.swift
//  MAD_Ind04_Bombothula_Jahnavi
//
//  Created by Jahnavi Bombothula on 4/23/24.
//

import Foundation
struct state_struct: Codable {
    let Execution_Status: Bool
    let Fetched_state_details: [State_Details]
}

// MARK: - StateDetails
struct State_Details: Codable {
    let name, nickname: String
}
