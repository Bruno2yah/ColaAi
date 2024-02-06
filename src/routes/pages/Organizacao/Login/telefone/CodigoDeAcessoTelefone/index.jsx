
import React from 'react';
import { View, Text, TextInput, StyleSheet, TouchableOpacity } from 'react-native';

const CodigoDeAcessoTelefone = ({ navigation }) => {
    return (
    <View style={styles.container}>
      <Text style={styles.title}>Adicione o código de acesso</Text>
      <Text style={styles.description}>
       Será enviado na sua caixa de mensagens um {'\n'}SMS com um código de acesso para garantir{'\n'}um login seguro.
      </Text>
      <View style={styles.inputContainer}>
        <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1} />
        <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1}/>
        <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1}/>
        <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1}/>
        <TextInput style={styles.inputCode} keyboardType="numeric" maxLength={1}/>
      </View>
      <View style={styles.buttonColumn}>
        <Text style={styles.codigo}>Reenviar código</Text>
        <TouchableOpacity style={styles.button2}>
          <Text style={styles.buttonText2}>Enviar</Text>
        </TouchableOpacity>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'flex-start',
    backgroundColor: 'white',
    height: '100%',
    width: '100%',
    padding: 10,
    
  },
  title: {
    fontSize: 24,
    fontWeight: 'bold',
    width: '80%',
    textAlign: 'left',
  },
  description: {
    marginBottom: 20,
    width: '100%',
    textAlign: 'left',
    fontSize: 16,
  },
  buttonText2: {
    fontSize: 22,
    color: '#6D9EAF',
    textAlign: 'center',
  },
  button2: {
    backgroundColor: '#E6AEB2',
    padding: 10,
    marginTop: 5,
    borderRadius: 10,
    width: 170,
    height: 50,
  },
  buttonColumn: {
    width: 330,
    height: 50,
    alignItems: 'flex-end',
  },
  inputContainer: {
    flexDirection: 'row', // Align inputs horizontally
    marginBottom: 20,
  },
  inputCode: {
    borderWidth: 1,
    borderRadius: 5,
    borderBottomColor: '#aaa',
    fontSize: 28, // Aumente o tamanho do número dentro do input
    marginRight: 10,
    width: '15%',
    height: 70,
    textAlign: 'center', // Centralize o texto dentro do input
    keyboardType: 'numeric',
  },
  codigo: {
    width: "100%",
    height: 50,
    alignItems: 'flex-start',  
    fontSize: 16,
    color: 'blue',
    marginTop: 10,
  },
  
});

export default CodigoDeAcessoTelefone;

