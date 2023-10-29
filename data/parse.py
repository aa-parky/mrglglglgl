import re


class_mapping = {
    1: "Warrior",
    2: "Paladin",
    3: "Hunter",
    4: "Rogue",
    5: "Priest",
    7: "Shaman",
    8: "Mage",
    9: "Warlock",
    11: "Druid"
}

race_mapping = {
    1: "Human",
    2: "Orc",
    3: "Dwarf",
    4: "Night Elf",
    5: "Undead",
    6: "Tauren",
    7: "Gnome",
    8: "Troll"
}
def parse_lua_data(lua_content):
    # Regular expression pattern to match desired fields
    pattern = r'\["name"\] = "(?P<name>.*?)",.*?\["race_id"\] = (?P<race_id>\d+),.*?\["class_id"\] = (?P<class_id>\d+),.*?\["level"\] = (?P<level>\d+),'
    
    # Find all matches using the pattern
    matches = re.findall(pattern, lua_content, re.DOTALL)
    
    return matches

def main():
    # Read the content of the Lua file
    with open('collected_entries.lua', 'r', encoding='utf-8') as file:
        lua_content = file.read()

    # Parse the content to extract desired data
    parsed_data = parse_lua_data(lua_content)

    # Write the extracted data to a new text file
    with open('parsed_data.txt', 'w', encoding='utf-8') as outfile:
        for entry in parsed_data:
            outfile.write(f"{entry[0]}\t{race_mapping[int(entry[1])]}\t{class_mapping[int(entry[2])]}\t{entry[3]}\n")

if __name__ == "__main__":
    main()
