//Página de contato


import React, {useState} from 'react';
import { View, Text, Pressable, StyleSheet, Image, TextInput, Modal, StatusBar, ScrollView } from 'react-native';
import * as Animado from 'react-native-animatable';
import NavBar from '../../../../src/Components/NavBar/navbar';
import DropDownPicker from 'react-native-dropdown-picker';
import * as ImagePicker from 'expo-image-picker';
import AntDesign from 'react-native-vector-icons/AntDesign';

const ColaAi = ({navigation}) => {

  const [selectedValue, setSelectedValue] = useState(null);
  const [image, setImage] = useState(null);
  const [modalVisible, setModalVisible] = useState(false);

  const pickImage = async () => {
    let result = await ImagePicker.launchImageLibraryAsync({
      mediaTypes: ImagePicker.MediaTypeOptions.All,
      allowsEditing: true,
      aspect: [5, 5],
      quality: 1,
    });

    if (!result.cancelled) {
      setImage(result.assets[0].uri);
    }
  };

  const [openCategoria, setOpenCategoria] = useState(false);
  const [openMotivo, setOpenMotivo] = useState(false);
  const [value, setValue] = useState(null);

  const [itemsMotivo, setItemsMotivo] = useState([
    { label: 'Suporte técnico', value: 'Suporte técnico' },
    { label: 'Denúncia', value: 'Denúncia' },
    { label: 'Outros', value: 'OutrosMotivo' },
  ]);

  const [itemsCategoria, setItemsCategoria] = useState([
    { label: 'Organização', value: 'Organização' },
    { label: 'Publicação', value: 'Publicação' },
    { label: 'Evento', value: 'Evento' },
    { label: 'Outros', value: 'OutrosCategoria' },
  ]);

  return (
      <View style={styles.container}>
        <ScrollView>
        <StatusBar/>
        <View style={styles.voltar}>
          <Pressable onPress={() => navigation.navigate('Configuracoes')}>
          <AntDesign name='arrowleft' color={'grey'} size={40}></AntDesign>
          </Pressable>
        </View>

        <View style={styles.contato}>
          <Text style={styles.titulo}>Contato</Text>
          <Text style={styles.texto2}>Entre em contato com a nossa equipe de colaboradores e seja atendido por profissionais capacitados e interessados para oferecer a melhor vivência no Cola Aí.</Text>
        </View>

        <View style={styles.formulario}>

            <Text style={styles.texto}>Nome</Text>
            <TextInput placeholder='Nome do usuário' placeholderTextColor={'grey'} style={styles.input}></TextInput>

            <Text style={styles.texto}>Email</Text>
            <TextInput placeholder='Email do usuário' placeholderTextColor={'grey'} style={styles.input}></TextInput>

            <Text style={styles.texto}>Motivo do contato</Text>
            <DropDownPicker
            defaultValue={selectedValue}
            dropDownStyle={{ backgroundColor: 'grey' }}
            onChangeItem={itemsMotivo => setSelectedValue(itemsMotivo.value)}
            style={{borderWidth: 2, borderColor: 'grey'}}
            placeholder='Selecionar'
            open={openMotivo}
            setOpen={setOpenMotivo}
            value={value}
            items={itemsMotivo}
            setItems={setItemsMotivo}
            textStyle={{color: 'grey'}}
            setValue={setValue}
            />

            <Text style={styles.texto}>Descrição</Text>
            <TextInput placeholder='Descreva o motivo do seu contato' placeholderTextColor={'grey'} style={styles.comentario}></TextInput>

            <Text style={styles.texto}>Categoria da denúncia</Text>
            <DropDownPicker
            defaultValue={selectedValue}
            dropDownStyle={{ backgroundColor: 'grey' }}
            onChangeItem={itemsCategoria => setSelectedValue(itemsCategoria.value)}
            style={{borderWidth: 2, borderColor: 'grey'}}
            placeholder='Selecionar'
            open={openCategoria}
            setOpen={setOpenCategoria}
            value={value}
            items={itemsCategoria}
            setItems={setItemsCategoria}
            textStyle={{color: 'grey'}}
            setValue={setValue}
            />

            <Text style={styles.texto}>Inserir imagem</Text>

            <Pressable onPress={() => setModalVisible(true)}>
              <View style={styles.input2}>
                <Text style={styles.texto}>Carregar imagem</Text>
                <Text style={styles.texto}>+</Text>
              </View>
            </Pressable>

            <Text style={{color: '#6d9eaf', marginBottom: 10}}>As imagens serão reservadas e sem fins lucrativas, serão apenas para auxílio na resolução dos problemas.</Text>
            
            <View style={{alignItems: 'flex-end'}}>
            <Pressable style={styles.enviar}>
              <Text style={{color: '#6d9eaf'}}>Enviar</Text>
            </Pressable>
            </View>

          <Modal animationType="fade" transparent={true} visible={modalVisible}>
            <View style={styles.fundoModal}>
              <View style={styles.conteudoModal}>
                {image && <Image source={{ uri: image }} style={styles.image} />}
                {!image && (
                <Pressable style={styles.imageButton} onPress={pickImage}>
                  <Image source={require('../../../../assets/img/adicionarFoto.png')} style={styles.icon} />
                </Pressable>
                )}
                  <Pressable style={styles.botao} onPress={() => setModalVisible(false)}>
                    <Text>FECHAR</Text>
                  </Pressable>

                  <Pressable style={styles.botao} onPress={pickImage}>
                    <Text>TROCAR IMAGEM</Text>
                  </Pressable>
              </View>
            </View>
          </Modal>

        </View>
        </ScrollView>
        <NavBar/>
      </View> 
  );
};
// Estilos
const styles = StyleSheet.create({
    container: {
      justifyContent: 'center',
      alignItems: 'center',
      backgroundColor: 'white',
      flex: 1
    },
    titulo: {
      fontSize: 40,
      fontWeight: 'bold',
      color: 'grey'
    },
    texto: {
      fontSize: 25,
      color: 'grey',
      marginBottom: 3,
      fontWeight: 'bold'
    },
    texto2: {
      fontSize: 20,
      color: 'grey',
      marginBottom: 3,
    },
    contato: {
      paddingHorizontal: 10,
      marginBottom: 15,
      flex: 1
    },
    formulario: {
      width: '100%',
      paddingHorizontal: 10,
      flex: 2,
      marginBottom: 3
    },
    input: {
      marginBottom: 10,
      borderBottomWidth: 2,
      borderColor: 'grey'
    },
    input2: {
      borderWidth: 2,
      borderRadius: 7,
      borderColor: 'grey',
      height: 40,
      justifyContent: 'space-between',
      flexDirection: 'row',
      paddingHorizontal: 5,
      alignItems: 'center'
    },
    comentario: {
      borderWidth: 2,
      borderRadius: 7,
      height: 200,
      borderColor: 'grey',
      paddingHorizontal: 2
    },
    image: {
      width: 200,
      height: 200,
      borderRadius: 10,
      marginBottom: 10,
    },
    icon: {
      width: 100,
      height: 100,
      resizeMode: 'contain',
    },
    fundoModal: {
      flex: 1,
      backgroundColor: '#00000070',
      justifyContent: 'center',
      alignItems: 'center',
    },
    conteudoModal: {
      width: '60%',
      height: '50%',
      borderWidth: 2,
      borderRadius: 15,
      backgroundColor: 'white',
      justifyContent: 'center',
      alignItems: 'center',
      borderColor: 'grey'
    },
    botao: {
      borderWidth: 2,
      borderRadius: 10,
      alignItems: 'center',
      padding: 10,
      marginTop: 10
    },
    enviar: {
      height: 40,
      width: 120,
      backgroundColor: '#e6aeb2',
      borderRadius: 10,
      justifyContent: 'center',
      alignItems: 'center'
    },
    voltar: {
      width: '100%',
      alignItems: 'flex-start',
      justifyContent: 'center',
      paddingHorizontal: 10,
      flex: 0.25,
    }
  });

export default ColaAi;