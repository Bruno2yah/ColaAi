//Página de contato

import React, {useState} from 'react';
import { View, Text, Pressable, Image, TextInput, Modal } from 'react-native';
import * as Animado from 'react-native-animatable';
import NavBar from '../../../../Components/NavBar/navbar';
import DropDownPicker from 'react-native-dropdown-picker';
import * as ImagePicker from 'expo-image-picker';
import styles from '../../../../Components/Styles/Contato/ContatoStyle';

export default function Contato({ navigation }) {

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
  const [valueMotivo, setValueMotivo] = useState(null);
  const [valueCategoria, setValueCategoria] = useState(null);
  
  //Vetor com as opções do menu dropdown do motivo do contato
  const [itemsMotivo, setItemsMotivo] = useState([
    { label: 'Suporte técnico', value: 'Suporte técnico' },
    { label: 'Denúncia', value: 'Denúncia' },
    { label: 'Outros', value: 'OutrosMotivo' },
  ]);

  //Vetor com as opções do menu dropdown da categoria da denúncia
  const [itemsCategoria, setItemsCategoria] = useState([
    { label: 'Organização', value: 'Organização' },
    { label: 'Publicação', value: 'Publicação' },
    { label: 'Evento', value: 'Evento' },
    { label: 'Outros', value: 'OutrosCategoria' },
  ]);

  return (
      <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 50, width: 45 }}
                source={require('../../../../../assets/img/Contato/superiorDireito.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 100, width: 50, marginTop: 270 }}
                source={require('../../../../../assets/img/Contato/meioDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 75, width: 31,}}
                source={require('../../../../../assets/img/Contato/esquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 80, width: 100,}}
                source={require('../../../../../assets/img/Contato/inferiorDireito.png')}
              />
            </View>
          </View>
      </View>
        
        <View style={{paddingHorizontal: 15}}>
            <View style={{ flexDirection: 'row', alignItems: 'center'}}>
              <Pressable onPress={() => navigation.navigate('Perfil')}>
                <Image
                  style={{ height: 30, width: 30 }}
                  source={require('../../../../../assets/img/Contato/back.png')}
                />
              </Pressable>
              <Text style={styles.titulo}>Contato</Text>
            </View>
            <Text style={styles.texto2}>Entre em contato com a nossa equipe de colaboradores e seja atendido por profissionais capacitados e interessados para oferecer a melhor vivência no Cola Aí.</Text>
        </View>
        <View style={styles.formulario}>
          <View>
            <Text style={styles.texto}>Título</Text>
            <TextInput placeholder='Título do contato' placeholderTextColor={'grey'} style={styles.input}></TextInput>
          </View>
          <Text style={styles.texto}>Descrição</Text>
          <TextInput placeholder='Descreva o motivo do seu contato' multiline={true} numberOfLines={3} placeholderTextColor={'grey'} style={styles.comentario}></TextInput>
          <View style={{ flexDirection: 'row', justifyContent: 'space-between',}}>
            <View style={{width: '45%'}}>
              <Text style={styles.texto}>Categoria da denúncia</Text>
              <DropDownPicker
              defaultValue={selectedValue}
              onChangeItem={itemsCategoria => setSelectedValue(itemsCategoria.value)}
              style={{borderWidth: 2, borderColor: 'grey'}}
              placeholder='Selecionar'
              open={openCategoria}
              setOpen={setOpenCategoria}
              value={valueCategoria}
              items={itemsCategoria}
              setItems={setItemsCategoria}
              textStyle={{color: 'grey'}}
              setValue={setValueCategoria}
              />
            </View>
            <View style={{width: '45%'}}>
              <Text style={styles.texto}>Motivo do contato</Text>
              <DropDownPicker
              defaultValue={selectedValue}
              onChangeItem={itemsMotivo => setSelectedValue(itemsMotivo.value)}
              style={{borderWidth: 2, borderColor: 'grey', }}
              placeholder='Selecionar'
              open={openMotivo}
              setOpen={setOpenMotivo}
              value={valueMotivo}
              items={itemsMotivo}
              setItems={setItemsMotivo}
              textStyle={{color: 'grey'}}
              setValue={setValueMotivo}
              />
            </View>
          </View>
            
          <Text style={styles.texto}>Inserir imagem</Text>
          <View>
            {image ? (
              <View>
                <Image source={{ uri: image }} style={{ width: 125, height: 125, borderRadius: 10, borderWidth: 2, borderColor: 'black',}} />
                <Text style={{fontSize: 13, color: 'grey'}}>{image.substring(image.lastIndexOf('/') + 1)}</Text>
                <Text style={styles.trocarImagem} onPress={() => setModalVisible(true)}>TROCAR IMAGEM</Text>
              </View>
            ) : (
              <Pressable onPress={() => setModalVisible(true)}>
              <View style={styles.input2}>
                <Text style={styles.texto}>Carregar imagem</Text>
                <Text style={styles.texto}>+</Text>
              </View>
            </Pressable>
            )}
          </View>
          <Text style={{color: '#6d9eaf', marginBottom: 5, textAlign: 'justify'}}>As imagens serão reservadas e sem fins lucrativos, serão utilizadas apenas para auxilio na resolução de supostos problemas.</Text>
          
          <View style={{alignItems: 'flex-end'}}>
            <Pressable style={styles.enviar}>
              <Text style={{color: '#6d9eaf', fontSize: 20}}>Enviar</Text>
            </Pressable>
          </View>
          
          <Modal animationType="fade" transparent={true} visible={modalVisible}>
            <View style={styles.fundoModal}>
              <View style={styles.conteudoModal}>
                {image && <Image source={{ uri: image }} style={styles.image} />}
                {!image && (
                <Pressable style={styles.imageButton} onPress={pickImage}>
                  <Image source={require('../../../../../assets/img/Contato/adicionarFoto.png')} style={styles.icon} />
                </Pressable>
                )}
                  <Pressable style={styles.botao} onPress={() => setModalVisible(false)}>
                    <Text>FECHAR</Text>
                  </Pressable>

                  <Pressable style={styles.botao} onPress={pickImage}>
                    <Text>SELECIONAR IMAGEM</Text>
                  </Pressable>
              </View>
            </View>
          </Modal>

        </View>
      </View> 
  );
};