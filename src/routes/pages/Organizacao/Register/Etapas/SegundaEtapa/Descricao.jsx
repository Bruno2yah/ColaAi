import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, TextInput } from 'react-native';

export default function Descricao({ navigation }) {
  const [textValue, setTextValue] = useState('');

  return (
    <View style={styles.container}>
      <Text style={styles.title}>Adicione uma breve descrição sobre a sua organização?</Text>
      

      {/* Add TextArea */}
      <TextInput
        style={styles.textArea}
        multiline={true}
        numberOfLines={4}
        placeholder=" "
        value={textValue}
        onChangeText={(text) => setTextValue(text)}
      />
      <View style={styles.buttonColumn}>
        <TouchableOpacity style={styles.button2} onPress={() => navigation.navigate('TelaFinal2')}>
          <Text style={styles.buttonText2}>Prosseguir</Text>
        </TouchableOpacity>
      </View>
      <View style={styles.buttonPular}>
        <TouchableOpacity onPress={() => navigation.navigate('TelaFinal2')}>
          <Text style={styles.linkText}>adicionar mais tarde</Text>
        </TouchableOpacity>
      </View>
    </View>
  );
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: 'white',
    padding: 10,
  },
  title: {
    fontSize: 24,
    fontWeight: 'bold',
    marginBottom: 10,
    textAlign: 'left',
  },
  description: {
    marginBottom: 20,
    textAlign: 'left',
    fontSize: 16,
  },
  textArea: {
    width: '100%',
    height: 100,
    borderColor: 'gray',
    borderWidth: 1,
    borderRadius: 10,
    padding: 10,
    marginBottom: 20,
    width:'95%'
  },
  buttonText2: {
    fontSize: 22,
    color: '#6D9EAF',
    textAlign: 'center',
  },
  button2: {
    backgroundColor: '#FABDC1',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 170,
    height: 50,
  },
  linkText: {
    fontSize: 16,
    color: 'blue',
    marginTop: 10,
  },
  buttonPular: {
    justifyContent: 'flex-end',
    alignItems: 'center',
    width: '100%',
    height: '100%',
    position: 'absolute',
    bottom: 20,
  },
  buttonColumn: {
    width:'100%',
    height: 50,
    alignItems:"flex-end"
  },
});